<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

	public function index()
	{
		$content['company'] = $this->query->get_data_simple('client', [])->result();
		$data['content'] = $this->load->view('admin/company', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function new()
	{
		if ($this->input->post()) {
			$insert_data = [
				'name' => $this->input->post('name'),
				'content' => $this->input->post('content'),
				'lokasi' => $this->input->post('lokasi'),
				'website' => $this->input->post('website'),
				'title' => $this->input->post('title'),
				'quotes' => $this->input->post('quotes'),
				'meta_desc' => $this->input->post('desc'),
				'meta_keyword' => $this->input->post('keyword'),
				'article' => $this->input->post('article'),
				'industri' => $this->input->post('industri'),
				'size' => $this->input->post('size'),
				'type' => $this->input->post('type'),
			];
			$id = $this->query->insert_for_id('client', null, $insert_data)->output;
			$config['upload_path']          = './assets/img/case-studies/';
			$config['allowed_types']        = '*';
			$tmp = explode(".", $_FILES["image"]["name"]);
			$config['file_name']            = "img-$id." . end($tmp);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				$update_data['img'] = 'assets/img/case-studies/' . $config['file_name'];
				//unset upload image library for another upload
				unset($this->upload);
				//upload logo
				$config['upload_path'] = './assets/img/logos/brand/';
				$tmp = explode(".", $_FILES["logo"]["name"]);
				$config['file_name'] = "logo-$id." . end($tmp);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('logo')) {
					$update_data['logo'] = 'assets/img/logos/brand/' . $config['file_name'];
					//update db
					$this->query->update_data('client', $update_data, ['id' => $id]);
					//callback
					$this->session->set_flashdata('client', 'Berhasil Menambahkan Data');
					redirect(base_url('data/company'));
				} else {
					$this->session->set_flashdata('client', $this->upload->display_errors());
					$data['content'] = $this->load->view('admin/new_company', [], TRUE);
					$this->load->view('admin/index', $data, FALSE);
				}
			} else {
				$this->session->set_flashdata('client', $this->upload->display_errors());
				$data['content'] = $this->load->view('admin/new_company', [], TRUE);
				$this->load->view('admin/index', $data, FALSE);
			}
		} else {
			$data['content'] = $this->load->view('admin/new_company', [], TRUE);
			$this->load->view('admin/index', $data, FALSE);
		}
	}

	public function edit($id)
	{
		if ($this->input->post()) {
			$config = [];
			$insert_data = [
				'name' => $this->input->post('name'),
				'content' => $this->input->post('content'),
				'lokasi' => $this->input->post('lokasi'),
				'website' => $this->input->post('website'),
				'quotes' => $this->input->post('quotes'),
				'article' => $this->input->post('article'),
				'industri' => $this->input->post('industri'),
				'size' => $this->input->post('size'),
				'type' => $this->input->post('type'),

			];
			$this->query->update_data('client', $insert_data, ['id' => $id]);
			if (isset($_FILES["image"]) && $_FILES["image"]["name"]) {
				$config['upload_path']          = './assets/img/case-studies/';
				$config['allowed_types']        = '*';
				$tmp = explode(".", $_FILES["image"]["name"]);
				$config['file_name']            = "img-$id." . end($tmp);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$this->session->set_flashdata('client', 1);
					$data['content'] = $this->load->view('admin/new_company', [], TRUE);
					$this->load->view('admin/index', $data, FALSE);
					return;
				}
			}
			if (isset($_FILES["logo"]) && $_FILES["logo"]["name"]) {
				$update_data['img'] = 'assets/img/case-studies/' . $config['file_name'];
				//unset upload image library for another upload
				unset($this->upload);
				//upload logo
				$config['upload_path'] = './assets/img/logos/brand/';
				$tmp = explode(".", $_FILES["logo"]["name"]);
				$config['file_name'] = "logo-$id." . end($tmp);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('logo')) {
					$this->session->set_flashdata('client', 2);
					$data['content'] = $this->load->view('admin/new_company', [], TRUE);
					$this->load->view('admin/index', $data, FALSE);
					return;
				}
			}
			$this->session->set_flashdata('client', 'Berhasil Menambahkan Data');
			redirect(base_url('data/company'));
		} else {
			$content['client'] = $this->query->get_data_simple('client', ['id' => $id])->row();
			$data['content'] = $this->load->view('admin/edit_company', $content, TRUE);
			$this->load->view('admin/index', $data, FALSE);
		}
	}

	public function delete($id)
	{
		$this->query->delete_data('client', ['id' => $id]);
		$this->session->set_flashdata('client', 'Berhasil Menghapus Data');
		redirect(base_url('data/company'));
	}

	public function save_seo()
	{
		$update_data = [
			'title' => $this->input->post('title'),
			'meta_desc' => $this->input->post('desc'),
			'meta_keyword' => $this->input->post('keyword'),
		];
		$this->query->update_data('client', $update_data, ['id' => $this->input->post('id')]);
		$this->session->set_flashdata('client', 'Berhasil Menyimpan Perubahan');
		redirect(base_url('data/company'));
	}
}

/* End of file Company.php */
/* Location: ./application/controllers/data/Company.php */
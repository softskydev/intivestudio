<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel', 'admin');
		if (!$this->session->userdata('id')) {
			redirect(base_url('auth'));
		}
	}

	public function index(){
		$content['client'] = $this->query->get_data_simple('customer', [])->result();
		$data['content'] = $this->load->view('admin/client', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function new(){
		if ($this->input->post()) {
			$insert_data = [
				'name' => $this->input->post('name'),
				'content' => $this->input->post('quote'),
			];
			$id = $this->query->insert_for_id('customer', null, $insert_data)->output;
			$tmp = explode(".", $_FILES["image"]["name"]);
			$config['upload_path']          = './assets/img/avatars/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['file_name']            = 'avatar-'."$id.".end($tmp);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('image')) {
				//compress image
                $cfg['image_library']='gd2';
                $cfg['source_image']='./assets/img/avatars/'.$config['file_name'];
                $cfg['create_thumb']= FALSE;
                $cfg['maintain_ratio']= FALSE;
                $cfg['quality']= '100%';
                $cfg['new_image']= './assets/img/avatars/'.$config['file_name'];	
                $this->load->library('image_lib', $cfg);
                $this->image_lib->resize();
                //update db
                $this->query->update_data('customer', ['img' => $cfg['new_image']], ['id' => $id]);
                //callback
				$this->session->set_flashdata('client', 'Berhasil Menambahkan Data');
				redirect(base_url('data/client'));
			}else{
				$this->session->set_flashdata('client', $this->upload->display_errors());
				$data['content'] = $this->load->view('admin/new_client', [], TRUE);
				$this->load->view('admin/index', $data, FALSE);
			}
		}else{
			$data['content'] = $this->load->view('admin/new_client', [], TRUE);
			$this->load->view('admin/index', $data, FALSE);
		}
	}

	public function edit($id){
		$content['client'] = $this->query->get_data_simple('customer', ['id' => $id])->row();
		if ($this->input->post()) {
			$insert_data = [
				'name' => $this->input->post('name'),
				'content' => $this->input->post('quote'),
			];
			$this->query->update_data('customer', $insert_data, ['id' => $id]);
			if (isset($_FILES['image']) and $_FILES['image']['name']) {
				$config['upload_path']          = './assets/img/avatars/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['overwrite'] = TRUE;
				$tmp = explode(".", $_FILES["image"]["name"]);
				$config['file_name']            = 'avatar-'."$id.".end($tmp);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
					//compress image
	                $cfg['image_library']='gd2';
	                $cfg['source_image']='./assets/img/avatars/'.$config['file_name'];
	                $cfg['create_thumb']= FALSE;
	                $cfg['maintain_ratio']= FALSE;
	                $cfg['quality']= '100%';
	                $cfg['new_image']= './assets/img/avatars/'.$config['file_name'];	
	                $this->load->library('image_lib', $cfg);
	                $this->image_lib->resize();
	                //update db
	                $this->query->update_data('customer', ['img' => $cfg['new_image']], ['id' => $id]);
				}else{
					$this->session->set_flashdata('client', $this->upload->display_errors());
					$data['content'] = $this->load->view('admin/edit_client', $content, TRUE);
					$this->load->view('admin/index', $data, FALSE);
					return;
				}
			}
			$this->session->set_flashdata('client', 'Berhasil Menambahkan Data');
			redirect(base_url('data/client'));
		}else{
			$data['content'] = $this->load->view('admin/edit_client', $content, TRUE);
			$this->load->view('admin/index', $data, FALSE);
		}

	}

	public function delete($id){
		$this->query->delete_data('customer', ['id' => $id]);
		$this->session->set_flashdata('client', 'Berhasil Menghapus Data');
		redirect(base_url('data/client'));
	}
}
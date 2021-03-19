<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel', 'admin');
		if (!$this->session->userdata('id')) {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		if ($this->input->post()) {
			$insert_data = [
				'name' => $this->input->post('name'),
				'url' => $this->input->post('url'),
				'content' => $this->input->post('content')
			];
			$this->query->save_data('feature', $insert_data);
			$this->session->set_flashdata('feature', 'Data berhasil disimpan');
		}

		$content['feature'] = $this->query->get_data_simple('feature', [])->result();
		$data['content'] = $this->load->view('admin/feature', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function delete($id){
		$this->query->delete_data('feature', ['id' => $id]);
		$this->session->set_flashdata('feature', 'Data berhasil dihapus');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit(){
		$insert_data = [
			'name' => $this->input->post('name'),
			'url' => $this->input->post('url'),
			'content' => $this->input->post('content')
		];
		$this->query->update_data('feature', $insert_data, ['id' => $this->input->post('id')]);
		$this->session->set_flashdata('feature', 'Data berhasil diubah');
		redirect($_SERVER['HTTP_REFERER']);
	}


}

/* End of file Feature.php */
/* Location: ./application/controllers/data/Feature.php */
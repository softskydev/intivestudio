<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Step extends CI_Controller {

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
		$content['step'] = $this->query->get_data_simple('step', [])->result();
		$data['content'] = $this->load->view('admin/step', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function new(){
		$insert_data = [
			'header' => $this->input->post('title'),
			'body' => $this->input->post('content'),
			'url_string' => $this->input->post('url_string'),
			'url' => $this->input->post('url')
		];
		$this->query->save_data('step', $insert_data);
		$this->session->set_flashdata('client', 'Berhasil Menambah Data');
		redirect(base_url('data/step'));
	}

	public function delete($id){
		$this->query->delete_data('step', ['id' => $id]);
		$this->session->set_flashdata('client', 'Berhasil Menghapus Data');
		redirect(base_url('data/step'));
	}

	public function edit(){

		$insert_data = [
			'header' => $this->input->post('title'),
			'body' => $this->input->post('content'),
			'url_string' => $this->input->post('url_string'),
			'url' => $this->input->post('url')
		];
		$this->query->update_data('step', $insert_data, ['id' => $this->input->post('id')]);
		$this->session->set_flashdata('client', 'Berhasil Merubah Data');
		redirect(base_url('data/step'));
	}

}

/* End of file Step.php */
/* Location: ./application/controllers/data/Step.php */
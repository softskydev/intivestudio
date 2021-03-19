<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel', 'auth');
		if ($this->session->userdata('id')) {
			redirect(base_url('admin'));
		}
	}

	public function index()
	{
		if ($this->input->post()) {
			if ($this->auth->login($this->input->post('email'), $this->input->post('password'))) {
				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('login', 'Email atau Password Salah');
				$this->load->view('admin/login', $this->input->post(), FALSE);
			}
		}else{
			$this->load->view('admin/login', [], FALSE);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
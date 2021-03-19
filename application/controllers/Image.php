<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel', 'admin');
		$this->load->model('ClientModel', 'client');
		if (!$this->session->userdata('id')) {
			redirect(base_url('auth'));
		}
	}

	public function index()
	{
		$content['image'] = $this->client->getImage('img-home');
		$data['content'] = $this->load->view('admin/image_home', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);	
	}

}

/* End of file Image.php */
/* Location: ./application/controllers/Image.php */
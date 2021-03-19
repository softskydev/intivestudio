<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Emailblast extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel', 'admin');
		if (!$this->session->userdata('id')) {
			redirect(base_url('auth'));
		}
	}

	function index()
	{

		exit('No direct script access allowed');
	}

	public function send()
	{
		// $file_data = $this->upload_file();
		// $path = $file_data['full_path'];
		// echo $path;
		// exit;

		$nama = $_POST['user_name'];
		$email = $_POST['email'];
		for ($a = 0; $a < count($email); $a++) {

			$username['username'] = $nama[$a];
			$emails = $email[$a];
			$message = $this->load->view('greet_email', $username, true);

			$config = array(
				'protocol' => 'sendmail',
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'crlf'      => "\r\n",
				'newline'   => "\r\n",
				'wordwrap'	=> TRUE
			);
			$this->load->library('email');
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
			$this->email->from('marketing@intivestudio.com');
			$this->email->to($emails);
			$this->email->subject('Introducing Your Digital Movement Solutions');
			$this->email->message($message);
			// $this->email->attach('C:\Users\xyz\Desktop\images\abc.png');
			$this->email->attach('https://intivestudio.com/assets/attach_email/Intive_Studio_Portfolio.pdf');
			if ($this->email->send()) {
				echo 'Email send.';
			} else {
				show_error($this->email->print_debugger());
			}
		}
	}
	// function upload_file()
	// {

	// 	$config['upload_path']          = './assets/attach_email/';
	// 	$config['allowed_types']        = '*';
	// 	$this->load->library('upload', $config);
	// 	if ($this->upload->do_upload('file_input')) {
	// 		return $this->upload->data();
	// 	} else {
	// 		$this->upload->display_errors();
	// 	}
	// }
}

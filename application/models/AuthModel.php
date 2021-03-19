<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

	function login($email, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$data = $this->db->get()->row_array();
		// print_r($data);
		if (empty($data)) {
			return false;
		}else{
			$this->session->set_userdata($data);
			return true;
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/models/Auth.php */
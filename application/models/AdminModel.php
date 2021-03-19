<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function getHeader($param)
	{
		$this->db->like('name', $param, 'AFTER');
		$this->db->from('homepage');
		return $this->db->get()->result();
	}

	public function getCarousel($param){
		$this->db->where('name', 'carousel-'.$param);
		$this->db->from('image');
		return $this->db->get()->result();	
	}

	public function getSEO($param){
		$this->db->like('name', 'seo-'.$param, 'BOTH');
		$this->db->from('homepage');
		$data = $this->db->get()->result();
		$return = [];
		foreach ($data as $d) {
			$return[str_replace('seo-'.$param.'-', '', $d->name)] = $d->content;
		}
		return $return;

	}


}

/* End of file AdminModel.php */
/* Location: ./application/models/AdminModel.php */
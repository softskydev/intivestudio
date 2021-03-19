<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

	public function getHeader($param)
	{
		$this->db->like('name', $param, 'BOTH');
		$this->db->from('homepage');
		$data = $this->db->get()->result();
		$ret = [];
		foreach ($data as $d) {
			$ret[$d->name] = [
				'id' => $d->id,
				'title' => $d->title,
				'content' => $d->content,
				'nb' => $d->nb
			];
		}
		return $ret;
	}

	public function getImage($param){
		$this->db->like('name', $param, 'BOTH');
		$this->db->from('image');
		$data = $this->db->get()->result();
		$ret = [];
		foreach ($data as $d) {
			$ret[$d->name] = [
				'name' => $d->name,
				'src' => $d->src
			];
		}
		return $ret;
	}

	public function getSEO($param){
		$p = explode('-', $param);
		$return = [];
		if (isset($p[1])) {
			$this->db->where('id', $p[1]);
			$this->db->from('client');
			$data = $this->db->get()->row();
			$return['title'] = $data->title;
			$return['desc'] = $data->meta_desc;
			$return['keyword'] = $data->meta_keyword;
		}else{
			$this->db->like('name', 'seo-'.$param, 'BOTH');
			$this->db->from('homepage');
			$data = $this->db->get()->result();
			foreach ($data as $d) {
				$return[str_replace('seo-'.$param.'-', '', $d->name)] = $d->content;
			}
		}
		return $return;

	}

}

/* End of file ClientModel.php */
/* Location: ./application/models/ClientModel.php */
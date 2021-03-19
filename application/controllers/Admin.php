<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

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
		$data['content'] = $this->load->view('admin/welcome', [], TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}
	public function newsletter()
	{
		$data['content'] = $this->load->view('admin/email', [], TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	function ckeditor_upload_file()
	{

		$config['upload_path']   = './assets/upload/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['encrypt_name']  = true;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload')) {

			$picture         = $this->upload->data();
			$function_number = $_GET['CKEditorFuncNum'];
			$url             = base_url() . 'assets/upload/' . $picture['file_name'];
			$message         = 'Success uploaded file';
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
		}
	}

	public function homepage()
	{
		if ($this->input->post()) {
			for ($i = 1; $i < 7; $i++) {
				$update_data = [
					'title' => $this->input->post('header' . $i),
					'content' => $this->input->post('content' . $i)
				];
				$this->query->update_data('homepage', $update_data, ['id' => $i]);
			}
			$this->session->set_flashdata('homepage', 'Data berhasil disimpan');
		}
		$content['seo'] = $this->admin->getSEO('home');
		$content['headers'] = $this->admin->getHeader('home');
		$data['content'] = $this->load->view('admin/home', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function client()
	{
		if ($this->input->post()) {
			for ($i = 1; $i < 2; $i++) {
				$update_data = [
					'title' => $this->input->post('header' . $i),
					'content' => $this->input->post('content' . $i),
					'nb' => $this->input->post('client')
				];
				$this->query->update_data('homepage', $update_data, ['name' => 'clients-header-' . $i]);
			}
			$this->session->set_flashdata('homepage', 'Data berhasil disimpan');
		}
		$content['client'] = $this->query->get_data_simple('client', [])->result();
		$content['headers'] = $this->admin->getHeader('clients');
		$data['content'] = $this->load->view('admin/clientpage', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}
	public function artikel()
	{
		// if ($this->input->post()) {
		// 	for ($i = 1; $i < 2; $i++) {
		// 		$update_data = [
		// 			'title' => $this->input->post('header' . $i),
		// 			'content' => $this->input->post('content' . $i),
		// 			'nb' => $this->input->post('client')
		// 		];
		// 		$this->query->update_data('homepage', $update_data, ['name' => 'clients-header-' . $i]);
		// 	}
		// 	$this->session->set_flashdata('homepage', 'Data berhasil disimpan');
		// }
		$content['artikel'] = $this->query->get_data_simple('artikel', [])->result();
		$content['headers'] = $this->admin->getHeader('artikel');
		$data['content'] = $this->load->view('admin/article', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}

	public function carousel()
	{
		$content['image'] = $this->admin->getCarousel('home');
		$data['content'] = $this->load->view('admin/carousel_home', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}
	public function promo()
	{
		$content['isian'] = $this->query->get_query("SELECT * FROM promo WHERE id = 1")->row();
		$data['content'] = $this->load->view('admin/promo', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}
	public function save_promo()
	{
		$isi = $this->input->post('isi');
		$data = [
			'isi' => $isi,
		];
		$query = $this->query->update_data('promo', $data, ['id' => 1]);
		if ($query) {
			redirect($_SERVER['HTTP_REFERER']);
		};
	}
	public function slider_promo()
	{
		$config['upload_path'] = './assets/img/slider_promo/';
		$config['allowed_types'] = '*';

		//Load upload library
		$this->load->library('upload', $config);

		// File upload
		if (!$this->upload->do_upload('image')) {
			$this->upload->display_errors();
			return FALSE;
		} else {
			$fileData   = $this->upload->data();
			$uploadData = $fileData['file_name'];
			$data['img_slider'] = $uploadData;

			$this->query->save_data("slider_promo", $data);
		}

		echo $this->db->last_query();
	}
	public function upload_image()
	{
		if (isset($_FILES["image"]["name"])) {
			$config['upload_path'] = './assets/img/promo/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image')) {
				$this->upload->display_errors();
				return FALSE;
			} else {
				$data = $this->upload->data();
				echo base_url() . 'assets/img/promo/' . $data['file_name'];
			}
		}
	}
	function load_slider_promo()
	{
		$query = $this->query->get_query("SELECT * FROM slider_promo")->result();
		if ($query) {
			$resp = [
				'status' => 200,
				'data' => $query
			];
		} else {
			$resp = [
				'status' => 404,
				'data' => null
			];
		}

		echo json_encode($resp);
	}
	function delete_slider_promo($id)
	{
		$data = $this->query->get_data_simple('slider_promo', ['id' => $id])->row();
		@unlink('./assets/img/slider_promo/' . $data->img_slider);
		$query = $this->query->delete_data('slider_promo', ['id' => $id]);
		if ($query) {
			$resp = [
				'status' => 200,
				'msg' => 'success delete data'
			];
		} else {
			$resp = [
				'status' => 400,
				'msg' => 'failed delete data'
			];
		}

		echo json_encode($resp);
	}
	public function delete_image()
	{
		$src = $this->input->post('src');
		$file_name = str_replace('https://intivestudio.com/', '', $src);
		$unlink = unlink($file_name);
		if ($unlink) {
			echo 'File Delete Successfully';
		} else {
			echo $file_name;
		}
	}
	public function edit_carousel()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './assets/img/heros/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'hero-square-' . "$id." . end((explode(".", $_FILES["image"]["name"])));
		$config['overwrite'] 			= TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$this->query->update_data('image', ['src' => 'assets/img/heros/' . $config['file_name']], ['id' => $id]);
			$this->session->set_flashdata('carousel', 'Data berhasil disimpan');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function new_carousel()
	{
		$id = $this->query->insert_for_id('image', null, ['name' => 'carousel-home'])->output;
		$config['upload_path']          = './assets/img/heros/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'hero-square-' . "$id." . end((explode(".", $_FILES["image"]["name"])));
		$config['overwrite'] 			= TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$this->query->update_data('image', ['src' => 'assets/img/heros/' . $config['file_name']], ['id' => $id]);
			$this->session->set_flashdata('carousel', 'Data berhasil disimpan');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function delete_carousel($id)
	{
		$data = $this->query->get_data_simple('image', ['id' => $id])->row();
		@unlink('./' . $data->src);
		$this->query->delete_data('image', ['id' => $id]);
		$this->session->set_flashdata('carousel', 'Data berhasil dihapus');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function edit_image()
	{
		$data = $this->query->get_data_simple('image', ['name' => $this->input->post('name')])->row();
		$id = $data->id;
		$config['upload_path']          = './assets/img/square/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = 'square-' . "$id." . end((explode(".", $_FILES["image"]["name"])));
		$config['overwrite'] 			= TRUE;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$this->query->update_data('image', ['src' => 'assets/img/square/' . $config['file_name']], ['id' => $id]);
			$this->session->set_flashdata('carousel', 'Data berhasil disimpan');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function footer()
	{
		$content['headers'] = $this->admin->getHeader('footer');
		if ($this->input->post()) {
			for ($i = 1; $i <= count($content['headers']); $i++) {
				$update_data = [
					'title' => $this->input->post('header' . $i),
					'content' => $this->input->post('content' . $i),
					'nb' => $this->input->post('nb' . $i)
				];
				$this->query->update_data('homepage', $update_data, ['name' => 'footer-1']);
			}
			$this->session->set_flashdata('homepage', 'Data berhasil disimpan');
		}

		$data['content'] = $this->load->view('admin/footer', $content, TRUE);
		$this->load->view('admin/index', $data, FALSE);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
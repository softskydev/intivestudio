<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel', 'client');
	}

	public function index()
	{
		$content['step'] = $this->query->get_data_simple('step', [])->result();
		$content['feature'] = $this->query->get_data_simple('feature', [])->result();
		$content['carousel'] = $this->query->get_data_simple('image', ['name' => 'carousel-home'])->result();
		$content['image'] = $this->client->getImage('home');
		$content['clients'] = $this->query->get_data_simple('client', [])->result();
		$content['customers'] = $this->query->get_data_simple('customer', [])->result();
		$content['headers'] = $this->client->getHeader('home');
		$content['footer'] = $this->client->getHeader('footer');
		$data['content'] = $this->load->view('client/home', $content, TRUE);
		$data['seo'] = $this->client->getSEO('home');
		$this->load->view('client/index', $data, FALSE);
	}
	// public function article()
	// {
	// 	$content['headers'] = $this->client->getHeader('home');
	// 	$content['article'] = $this->query->get_data_simple('artikel', [])->result();
	// 	$content['footer'] = $this->client->getHeader('footer');
	// 	$data['content'] = $this->load->view('client/article', $content, TRUE);
	// 	$data['seo'] = $this->client->getSEO('home');
	// 	$this->load->view('client/index', $data, FALSE);
	// }
	public function article($param = null)
	{
		if ($param) {
			$content['headers'] = $this->client->getHeader('home');
			$content['article'] = $this->query->get_data_simple('artikel', ['slug' => $param])->row();
			$content['more_article'] = $this->query->get_query('SELECT * FROM artikel WHERE slug !=  \'' . $param . '\' ')->result();
			$content['footer'] = $this->client->getHeader('footer');
			$content['clients'] = $this->query->get_data_simple('client', [])->result();
			$data['content'] = $this->load->view('client/article_detail', $content, TRUE);
			$data['seo'] = $this->client->getSEO('home');

			$this->load->view('client/index', $data, FALSE);
		} else {
			$content['headers'] = $this->client->getHeader('home');
			$content['article'] = $this->query->get_data_simple('artikel', [])->result();
			$content['footer'] = $this->client->getHeader('footer');
			$content['clients'] = $this->query->get_data_simple('client', [])->result();
			$data['content'] = $this->load->view('client/article', $content, TRUE);
			$data['seo'] = $this->client->getSEO('home');

			$this->load->view('client/index', $data, FALSE);
		}
	}
	public function click()
	{
		$content['headers'] = $this->client->getHeader('home');
		$content['footer'] = $this->client->getHeader('footer');
		$content['clients'] = $this->query->get_data_simple('client', [])->result();
		$data['content'] = $this->load->view('client/click', $content, TRUE);
		$data['seo'] = $this->client->getSEO('home');
		$this->load->view('client/index', $data, FALSE);
	}
	public function client($param = null)
	{
		if ($param) {
			$content['client'] = $this->query->get_data_simple('client', ['name' => str_replace('-', ' ', $param)])->row();
			if (!$content['client'] || empty($content['client'])) show_404();
			$id = $content['client']->id;
			$content['random'] = $this->query->get_query("SELECT * FROM client WHERE id != $id ORDER BY RAND() LIMIT 1")->row();
			$content['clients'] = $this->query->get_query("SELECT * FROM client WHERE id != $id")->result();
			$content['headers'] = $this->client->getHeader('clients');
			$data['content'] = $this->load->view('client/client_detail', $content, TRUE);
			$data['seo'] = $this->client->getSEO('client-' . $content['client']->id);
		} else {
			$content['client'] = $this->query->get_data_simple('client', [])->result();
			$content['clients'] = $this->query->get_query("SELECT * FROM client")->result();
			$content['headers'] = $this->client->getHeader('clients');
			$content['image'] = $this->query->get_data_simple('client', ['id' => $content['headers']['clients-header-1']['nb']])->row();
			$data['content'] = $this->load->view('client/clients', $content, TRUE);
		}

		$this->load->view('client/index', $data, FALSE);
	}

	public function about()
	{
		$content['feature'] = $this->query->get_data_simple('feature', [])->result();
		$content['customers'] = $this->query->get_data_simple('customer', [])->result();
		$content['clients'] = $this->query->get_query("SELECT * FROM client")->result();
		$content['headers'] = $this->client->getHeader('home');
		$data['content'] = $this->load->view('client/about', $content, TRUE);
		$this->load->view('client/index', $data, FALSE);
	}
}



/* End of file Client.php */
/* Location: ./application/controllers/Client.php */
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id')) {
            redirect(base_url('auth'));
        }
    }

    public function new()
    {
        if ($this->input->post()) {
            $insert_data = [
                'judul' => $this->input->post('judul'),
                'artikel' => $this->input->post('artikel'),
                'slug' => url_title($this->input->post('judul'), '-', TRUE)
            ];
            $id = $this->query->insert_for_id('artikel', null, $insert_data)->output;
            $tmp = explode(".", $_FILES["img"]["name"]);
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name']            = 'avatar-' . "$id." . end($tmp);
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('img')) {
                //compress image
                $cfg['image_library'] = 'gd2';
                $cfg['source_image'] = './assets/img/artikel/' . $config['file_name'];
                $cfg['create_thumb'] = FALSE;
                $cfg['maintain_ratio'] = FALSE;
                $cfg['quality'] = '100%';
                $cfg['new_image'] = './assets/img/artikel/' . $config['file_name'];
                $this->load->library('image_lib', $cfg);
                $this->image_lib->resize();
                //update db
                $this->query->update_data('artikel', ['img' => $cfg['new_image']], ['id' => $id]);
                //callback
                $this->session->set_flashdata('artikel', 'Berhasil Menambahkan Data');
                redirect(base_url('admin/artikel'));
            } else {
                $this->session->set_flashdata('artikel', $this->upload->display_errors());
                $data['content'] = $this->load->view('admin/new_artikel', [], TRUE);
                $this->load->view('admin/index', $data, FALSE);
            }
        } else {
            $data['content'] = $this->load->view('admin/new_artikel', [], TRUE);
            $this->load->view('admin/index', $data, FALSE);
        }
    }

    public function edit($id)
    {
        $content['artikel'] = $this->query->get_data_simple('artikel', ['id' => $id])->row();
        if ($this->input->post()) {
            $insert_data = [
                'judul' => $this->input->post('judul'),
                'artikel' => $this->input->post('artikel'),
                'slug' => url_title($this->input->post('judul'), '-', TRUE)
            ];
            $this->query->update_data('artikel', $insert_data, ['id' => $id]);
            if (isset($_FILES['img']) and $_FILES['img']['name']) {
                $tmp = explode(".", $_FILES["img"]["name"]);
                $config['upload_path']          = './assets/img/artikel/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['overwrite'] = TRUE;
                $config['file_name']            = 'avatar-' . "$id." . end($tmp);
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('img')) {
                    //compress image
                    $cfg['image_library'] = 'gd2';
                    $cfg['source_image'] = './assets/img/artikel/' . $config['file_name'];
                    $cfg['create_thumb'] = FALSE;
                    $cfg['maintain_ratio'] = FALSE;
                    $cfg['quality'] = '100%';
                    $cfg['new_image'] = './assets/img/artikel/' . $config['file_name'];
                    $this->load->library('image_lib', $cfg);
                    $this->image_lib->resize();
                    //update db
                    $this->query->update_data('artikel', ['img' => $cfg['new_image']], ['id' => $id]);
                } else {
                    $this->session->set_flashdata('artikel', $this->upload->display_errors());
                    $data['content'] = $this->load->view('admin/edit_artikel', $content, TRUE);
                    $this->load->view('admin/index', $data, FALSE);
                    return;
                }
            }
            $this->session->set_flashdata('artikel', 'Berhasil Menambahkan Data');
            redirect(base_url('admin/artikel'));
        } else {
            $data['content'] = $this->load->view('admin/edit_artikel', $content, TRUE);
            $this->load->view('admin/index', $data, FALSE);
        }
    }

    public function delete($id)
    {
        $data = $this->query->get_data_simple('artikel', ['id' => $id])->row();
        $path     = './assets/img/artikel/' . $data->img;
        if (file_exists($path)) {
            unlink($path);
        }
        $this->query->delete_data('artikel', ['id' => $id]);
        $this->session->set_flashdata('artikel', 'Berhasil Menghapus Data');
        redirect(base_url('admin/artikel'));
    }
}

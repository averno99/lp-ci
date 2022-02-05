<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Header extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Header";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['header'] = $this->db->get('header')->row_array();

        $this->form_validation->set_rules(
            'id',
            'Id',
            'required|trim'
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/head', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/header', $data);
            $this->load->view('backend/template/footer');
        } else {
            $upload_gambar = $_FILES['gambar']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 2048;
                $config['upload_path']      = './assets/header/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_lama = $data['header']['header'];
                    if ($gambar_lama != 'default.png') {
                        unlink(FCPATH . 'assets/header/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('header', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('header');
            $this->session->set_flashdata('berhasil', 'Data header berhasil diubah');
            redirect('header');
        }
    }
}

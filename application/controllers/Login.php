<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Login";

        if ($this->session->userdata('username')) {
            redirect('profil');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/login', $data);
        } else {
            $this->_masuk();
        }
    }

    private function _masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            #cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username']
                ];
                $this->session->set_userdata($data);

                $this->session->set_flashdata('login', 'Anda berhasil masuk kedalam sistem');
                redirect('profil');
            } else {
                $this->session->set_flashdata('pesan', "Password yang anda masukkan Salah");
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', "Username tidak terdaftar");
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('pesan', 'Kamu Berhasil Logout');
        redirect('login');
    }
}

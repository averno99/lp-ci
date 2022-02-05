<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
        $data['judul'] = "Profile";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules(
            'passwordSekarang',
            'Password Saat Ini',
            'required|trim',
            array(
                'required' => 'Password tidak boleh kosong'
            )
        );
        $this->form_validation->set_rules(
            'passwordBaru1',
            'Password Baru',
            'required|trim|min_length[4]|max_length[16]',
            array(
                'required' => 'Password baru tidak boleh kosong',
                'min_length' => 'Mohon masukkan password dengan 4 - 16 karakter',
                'max_length' => 'Mohon masukkan password dengan 4 - 16 karakter'
            )
        );
        $this->form_validation->set_rules(
            'passwordBaru2',
            'Ulangi Password',
            'required|trim|matches[passwordBaru1]',
            array(
                'required' => 'Ulangi password tidak boleh kosong',
                'matches' => 'Password tidak sesuai.'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/head', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/profil', $data);
            $this->load->view('backend/template/footer');
        } else {
            $password_sekarang = $this->input->post('passwordSekarang');
            $password_baru = $this->input->post('passwordBaru1');
            if (!password_verify($password_sekarang, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', "Password Sekarang Salah!");
                redirect('profil');
            } else {
                if ($password_sekarang == $password_baru) {
                    $this->session->set_flashdata('pesan', "Password tidak boleh sama dengan password lama");
                    redirect('profil');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('berhasil', "Password berhasil diubah");
                    redirect('profil');
                }
            }
        }
    }
}

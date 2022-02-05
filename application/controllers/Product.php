<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
        $data['judul'] = "Product";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['product'] = $this->db->get('product')->result_array();

        $this->load->view('backend/template/head', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/product', $data);
        $this->load->view('backend/template/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Product";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules(
            'nama',
            'Nama Produk',
            'required|trim',
            array('required' => 'Nama produk tidak boleh kosong')
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan Produk',
            'required|trim',
            array('required' => 'Keterangan produk tidak boleh kosong')
        );

        $this->form_validation->set_rules(
            'nohp',
            'Nomor HP/WA',
            'required|numeric|trim',
            array(
                'required' => 'Nomor HP/WA tidak boleh kosong',
                'numeric' => 'Terdapat huruf pada Nomor HP/WA'
            )
        );


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/head', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/product_tambah', $data);
            $this->load->view('backend/template/footer');
        } else {
            $upload_gambar = $_FILES['gambar']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 2048;
                $config['upload_path']      = './assets/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'gambar' => $upload_gambar,
                'kontak' => htmlspecialchars($this->input->post('nohp', true))
            ];

            $this->db->insert('product', $data);
            $this->session->set_flashdata('berhasil', 'Data produk berhasil ditambahkan');
            redirect('product');
        }
    }

    public function ubah($id = NULL)
    {
        $data['judul'] = "Ubah Product";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();

        $this->form_validation->set_rules(
            'nama',
            'Nama Produk',
            'required|trim',
            array('required' => 'Nama produk tidak boleh kosong')
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan Produk',
            'required|trim',
            array('required' => 'Keterangan produk tidak boleh kosong')
        );

        $this->form_validation->set_rules(
            'nohp',
            'Nomor HP/WA',
            'required|numeric|trim',
            array(
                'required' => 'Nomor HP/WA tidak boleh kosong',
                'numeric' => 'Terdapat huruf pada Nomor HP/WA'
            )
        );


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/head', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/product_ubah', $data);
            $this->load->view('backend/template/footer');
        } else {
            $upload_gambar = $_FILES['gambar']['name'];

            if ($upload_gambar) {
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['max_size']         = 2048;
                $config['upload_path']      = './assets/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar_lama = $data['product']['gambar'];
                    if ($gambar_lama != 'default.png') {
                        unlink(FCPATH . 'assets/produk/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'kontak' => htmlspecialchars($this->input->post('nohp', true))
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('product', $data);
            $this->session->set_flashdata('berhasil', 'Data produk berhasil diubah');
            redirect('product');
        }
    }

    public function hapus($id = NULL)
    {
        $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();

        $gambar_lama = $data['product']['gambar'];
        if ($gambar_lama != 'default.png') {
            unlink(FCPATH . 'assets/produk/' . $gambar_lama);
        }

        $this->db->where('id', $id);
        $this->db->delete('product');
        $this->session->set_flashdata('berhasil', 'Data produk berhasil dihapus');
        redirect('product');
    }
}

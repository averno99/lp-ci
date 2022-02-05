<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Borneo";

        $data['product'] = $this->db->get('product')->result_array();
        $data['header'] = $this->db->get('header')->row_array();


        $this->load->view('frontend/head', $data);
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/content', $data);
        $this->load->view('frontend/footer');
        $this->load->view('frontend/js');
    }
}

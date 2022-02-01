<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Cetak',
            'username' => $this->session->userdata('username'),
            'cetak' => $this->DashboardModel->get('cetak')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('cetak/index', $data);
        $this->load->view('templates/footer');
    }
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Laporan',
            'username' => $this->session->userdata('username'),
            'pesanan' => $this->DashboardModel->get('pesanan')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data = [
            'title' => 'Cetak',
            'username' => $this->session->userdata('username'),
            'cetak' => $this->DashboardModel->get('pesanan')->result()
        ];
        $this->load->library('Pdf');
        $this->pdf->load_view('cetak/index', $data);
        $this->pdf->render();
        $this->pdf->stream("laporan.pdf", array('Attachment'=>0));
    }
}
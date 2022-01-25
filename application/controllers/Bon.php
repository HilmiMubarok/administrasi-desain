<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bon extends CI_Controller {
    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data = [
            'title' => 'BON Bahan',
            'username' => $this->session->userdata('username'),
            'bon' => $this->DashboardModel->get_join('bon_bahan', 'stok_bahan', 'stok_bahan.kode_bahan = bon_bahan.kode_bahan')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('bon/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($kode_bahan)
    {
        $get = [
            'bon_bahan.kode_bahan' => $kode_bahan
        ];
        $data = [
            'title' => 'Detail Bon Bahan',
            'username' => $this->session->userdata('username'),
            'bon' => $this->DashboardModel->get_by($get, 'bon_bahan', 'stok_bahan', 'stok_bahan.kode_bahan = bon_bahan.kode_bahan')->row()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('bon/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = [
            'stok' => $this->DashboardModel->get('stok_bahan')->result(),
            'title' => 'Tambah Bon Bahan',
            'username' => $this->session->userdata('username'),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('bon/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $data = array(
            'kode_bahan'  => $this->input->post('kode_bahan'),
            'tanggal_bon'  => $this->input->post('tanggal_bon'),
            'shift'  => $this->input->post('shift'),
            'jumlah_bon'  => $this->input->post('jumlah_bon'),
        );
        
        $save = $this->DashboardModel->save($data, 'bon_bahan');

        if ($save) {
            $data = array(
                'pesan' => 'Data Berhasil Disimpan',
                'icon'  => 'success'
            );
            $this->session->set_flashdata($data);
            redirect("bon");
        } else {
            $data = array(
                'pesan' => 'Data Gagal Disimpan',
                'icon'  => 'danger'
            );
            $this->session->set_flashdata($data);
            redirect("bon");
        }
    }

    public function edit($id)
    {
        $get = [
            'bon_bahan.kode_bahan' => $id
        ];
        $data = [
            'title' => 'Edit Bon Bahan',
            'stok' => $this->DashboardModel->get('stok_bahan')->result(),
            'username' => $this->session->userdata('username'),
            'bon' => $this->DashboardModel->get_by($get, 'bon_bahan', 'stok_bahan', 'stok_bahan.kode_bahan = bon_bahan.kode_bahan')->row()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('bon/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data = array(
            'kode_bahan'  => $this->input->post('kode_bahan'),
            'tanggal_bon'  => $this->input->post('tanggal_bon'),
            'shift'  => $this->input->post('shift'),
            'jumlah_bon'  => $this->input->post('jumlah_bon'),
        );
		$where = array('id_bon' => $this->input->post('id_bon'));

		$update = $this->DashboardModel->update($where, $data, 'bon_bahan');

		if ($update) {
			$data = array(
				'pesan' => 'Data Berhasil Diupdate',
				'icon'  => 'success'
			);
			$this->session->set_flashdata($data);
			redirect("bon");
		} else {
			$data = array(
				'pesan' => 'Data Gagal Diupdate',
				'icon'  => 'danger'
			);
			$this->session->set_flashdata($data);
			redirect("bon");
		}
    }

    public function hapus()
    {
        $where = array('id_bon' => $this->uri->segment(3));
        
		$delete = $this->DashboardModel->delete($where, 'bon_bahan');

		if ($delete) {
			$data = array(
				'pesan' => 'Data Berhasil Dihapus',
				'icon'  => 'success'
			);
			$this->session->set_flashdata($data);
			redirect("bon");
		} else {
			$data = array(
				'pesan' => 'Data Gagal Dihapus',
				'icon'  => 'danger'
			);
			$this->session->set_flashdata($data);
			redirect("bon");
		}
    }
    
}

?>
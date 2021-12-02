<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
        if ($this->session->userdata('logged_in') == FALSE ) {
            redirect("auth");
        }
    }

    public function index()
    {

        $data = [
            'title' => 'Stok Bahan',
            'username' => $this->session->userdata('username'),
            'stok' => $this->DashboardModel->get('stok_bahan')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('stok/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Stok Bahan',
            'username' => $this->session->userdata('username'),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('stok/tambah');
        $this->load->view('templates/footer');
    }

    public function save()
    {
        $data = array(
            'kode_bahan'  => $this->input->post('kode_bahan'),
            'nama_bahan'  => $this->input->post('nama_bahan'),
            'satuan'  => $this->input->post('satuan'),
            'jumlah_stok'  => $this->input->post('jumlah_stok'),
            'jenis'  => $this->input->post('jenis'),
            'keterangan'  => $this->input->post('keterangan'),
        );
        
        $save = $this->DashboardModel->save($data, 'stok_bahan');

        if ($save) {
            $data = array(
                'pesan' => 'Data Berhasil Disimpan',
                'icon'  => 'success'
            );
            $this->session->set_flashdata($data);
            redirect("stok");
        } else {
            $data = array(
                'pesan' => 'Data Gagal Disimpan',
                'icon'  => 'danger'
            );
            $this->session->set_flashdata($data);
            redirect("stok");
        }
    }

    public function edit($id)
    {
        $get = [
            'kode_bahan' => $id
        ];
        $data = [
            'title' => 'Edit Stok Bahan',
            'username' => $this->session->userdata('username'),
            'stok' => $this->DashboardModel->get_by($get, 'stok_bahan')->row()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('stok/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $data = array(
            'kode_bahan'  => $this->input->post('kode_bahan'),
            'nama_bahan'  => $this->input->post('nama_bahan'),
            'satuan'  => $this->input->post('satuan'),
            'jumlah_stok'  => $this->input->post('jumlah_stok'),
            'jenis'  => $this->input->post('jenis'),
            'keterangan'  => $this->input->post('keterangan'),
        );
		$where = array('kode_bahan' => $this->input->post('kode_bahan'));

		$update = $this->DashboardModel->update($where, $data, 'stok_bahan');

		if ($update) {
			$data = array(
				'pesan' => 'Data Berhasil Diupdate',
				'icon'  => 'success'
			);
			$this->session->set_flashdata($data);
			redirect("stok");
		} else {
			$data = array(
				'pesan' => 'Data Gagal Diupdate',
				'icon'  => 'danger'
			);
			$this->session->set_flashdata($data);
			redirect("stok");
		}
    }

    public function hapus()
    {
        $where = array('kode_bahan' => $this->uri->segment(3));

		$delete = $this->DashboardModel->delete($where, 'stok_bahan');

		if ($delete) {
			$data = array(
				'pesan' => 'Data Berhasil Dihapus',
				'icon'  => 'success'
			);
			$this->session->set_flashdata($data);
			redirect("stok");
		} else {
			$data = array(
				'pesan' => 'Data Gagal Dihapus',
				'icon'  => 'danger'
			);
			$this->session->set_flashdata($data);
			redirect("stok");
		}
    }
		

}

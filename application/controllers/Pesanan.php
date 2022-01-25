<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Pesanan',
            'username' => $this->session->userdata('username'),
            'pesanan' => $this->DashboardModel->get('pesanan')->result()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Pesanan',
            'username' => $this->session->userdata('username'),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan/tambah');
        $this->load->view('templates/footer');
    }

    public function save()
    {

        $this->load->library('upload');
        $config['upload_path'] = './assets/images/uploads';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['file_name'] = $_FILES['gambar']['name'];


        $this->upload->initialize($config);

        if (!empty($_FILES['gambar']['name'])) {
            if ( $this->upload->do_upload('gambar') ) {
                $foto = $this->upload->data();
                $data = array(
                    'tanggal_pesan'  => $this->input->post('tanggal_pesan'),
                    'pemesanan'  => $this->input->post('pemesanan'),
                    'panjang'  => $this->input->post('panjang'),
                    'lebar'  => $this->input->post('lebar'),
                    'jumlah_pesan'  => $this->input->post('jumlah_pesan'),
                    'gambar'  => $foto['file_name'],
                    'jenis_pesan'  => $this->input->post('jenis_pesan'),
                );
                $save = $this->DashboardModel->save($data, 'pesanan');   
    
                if ($save) {
                    $data = array(
                        'pesan' => 'Data Berhasil Disimpan',
                        'icon'  => 'success'
                    );
                    $this->session->set_flashdata($data);
                    redirect("pesanan");
                } else {
                    $data = array(
                        'pesan' => 'Data Gagal Disimpan',
                        'icon'  => 'danger'
                    );
                    $this->session->set_flashdata($data);
                    redirect("pesanan");
                }

            } else {
                echo "<pre>";
                var_dump($this->upload->error_msg[0]);
            }
        } else {
            $data = array(
                'tanggal_pesan'  => $this->input->post('tanggal_pesan'),
                'pemesanan'  => $this->input->post('pemesanan'),
                'panjang'  => $this->input->post('panjang'),
                'lebar'  => $this->input->post('lebar'),
                'jumlah_pesan'  => $this->input->post('jumlah_pesan'),
                'gambar'  => "placeholder.jpg",
                'jenis_pesan'  => $this->input->post('jenis_pesan'),
            );
            $save = $this->DashboardModel->save($data, 'pesanan');   
    
            if ($save) {
                $data = array(
                    'pesan' => 'Data Berhasil Disimpan',
                    'icon'  => 'success'
                );
                $this->session->set_flashdata($data);
                redirect("pesanan");
            } else {
                $data = array(
                    'pesan' => 'Data Gagal Disimpan',
                    'icon'  => 'danger'
                );
                $this->session->set_flashdata($data);
                redirect("pesanan");
            }
        }

    }

    public function detail($id)
    {
        $get = [
            'id_pesanan' => $id
        ];
        $data = [
            'title' => 'Detail Pesanan',
            'username' => $this->session->userdata('username'),
            'pesanan' => $this->DashboardModel->get_by($get, 'pesanan')->row()
        ];
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pesanan/detail', $data);
        $this->load->view('templates/footer');
    }


    public function hapus()
    {
        $where = array('id_pesanan' => $this->uri->segment(3));

        $foto = $this->DashboardModel->get_by($where, 'pesanan')->row();
        $foto = $foto->gambar;
        $path = './assets/images/uploads/';

		$delete = $this->DashboardModel->delete($where, 'pesanan');

		if ($delete) {
            @unlink($path.$foto);
			$data = array(
				'pesan' => 'Data Berhasil Dihapus',
				'icon'  => 'success'
			);
			$this->session->set_flashdata($data);
			redirect("pesanan");
		} else {
			$data = array(
				'pesan' => 'Data Gagal Dihapus',
				'icon'  => 'danger'
			);
			$this->session->set_flashdata($data);
			redirect("pesanan");
		}
    }
    
}

?>
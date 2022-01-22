<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect("dashboard");
		}
		$data['title'] = "Login Administrasi Desain";

		$this->load->view('auth/login', $data);
	}

    public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

        echo "<pre>";
        
		$auth     = array('username' => $username, 'password' => $password );
		$res      = $this->AuthModel->cek_login('users', $auth)->row();


		if ($res) {
			$user_data = array(
				'username' => $res->username,
				'role' => $res->role,
				'logged_in'    => TRUE
			);


			$this->session->set_userdata($user_data);

			redirect(base_url("dashboard"));

		} else {
			$flash_data = array(
				'pesan' => 'Username atau Password Salah'
			);
			$this->session->set_flashdata($flash_data);
			redirect(base_url("auth"));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

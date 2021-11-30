<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
                'title' => 'Administrasi Desain'
            ];
			$data['username'] = $this->session->userdata('username');
            $this->load->view('templates/header', $data);
			$this->load->view('welcome_message', $data);
			
		}
		

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
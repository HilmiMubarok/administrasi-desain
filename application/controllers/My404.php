<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

	public function index()
	{
		// $data = [
		// 	'title' => 'Administrasi Desain'
		// ];
		// $this->load->view('templates/header', $data);
		return $this->load->view('404');
	}
}

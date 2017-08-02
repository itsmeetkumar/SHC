<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_d extends CI_Controller {

	public function index()
	{
		$this->load->view('app/header');
		$this->load->view('app/app_1');
		$this->load->view('app/footer');
	}
	public function htrack()
	{
		# code...
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/bb');
		$this->load->view('app/h1/footer');
	}
	public function medications()
	{
		# code...
		$this->load->view('app/medications/header');
		$this->load->view('app/medications/medication');
		$this->load->view('app/medications/footer');
	}

}

/* End of file app_d.php */
/* Location: ./application/controllers/app_d.php */
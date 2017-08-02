<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adwaita extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('app/timeline/time');
		$this->load->view('footer');		
	}
	

}

/* End of file adwaita.php */
/* Location: ./application/controllers/adwaita.php */
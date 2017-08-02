<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad_chat extends CI_Controller {

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('ad_chat');
		$this->load->view('footer');	
	}

}

/* End of file ad_chat.php */
/* Location: ./application/controllers/ad_chat.php */
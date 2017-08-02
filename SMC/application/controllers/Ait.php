<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ait extends CI_Controller {

	public function index()
	{

		
	}
	public function patient()
	{
		# code...
		$this->load->view('header');
		$this->load->view('hack/patient');
		$this->load->view('footer');
	}
	public function search_patient()
	{
		# code...
		
		$this->load->view('header');
		$this->load->view('hack/v2_patient');
		$this->load->view('footer');
	}
	public function doctor()
	{
		# code...
		$this->load->view('header');
		$this->load->view('hack/Doctor1');
		$this->load->view('footer');
	}
	public function smartcard()
	{
		# code...
		$this->load->view('header');
		$this->load->view('hack/add_smartcard');
		$this->load->view('footer');
	}
	public function search_pt()
	{
		# code...
		//$this->form_validation->set_rules('pid', 'pid', 'required');

		//if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('pid' =>$this->input->post('pid'));
			//$pid = $this->input->post('pid');

			$this->load->view('header');
			$this->load->view('hack/sm2', $data);
			$this->load->view('footer');

			

		//} else {
			# code...
			//echo "form validation";



		//}


	}


	public function search_pt3($data)
	{
		# code...
		//$this->form_validation->set_rules('pid', 'pid', 'required');

		//if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('pid' =>$data);
			//$pid = $this->input->post('pid');

			$this->load->view('header');
			$this->load->view('hack/sm2', $data);
			$this->load->view('footer');

			

		//} 


	}

}

/* End of file Ait.php */
/* Location: ./application/controllers/Ait.php */
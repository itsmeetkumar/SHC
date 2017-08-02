<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('appointment/appointment');
		$this->load->view('footer');

	}
	public function in_app()
	{
		# code...
		$this->form_validation->set_rules('pid', 'pid', 'required');
		$this->form_validation->set_rules('did', 'did', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('time', 'time', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('pat_id' =>$this->input->post('pid'),
				           'doc_id' =>$this->input->post('did'),
				           'date' =>$this->input->post('date'),
				           'time' =>$this->input->post('time')
						);


			$this->db->insert('appointment',$data);
			$data['mess']='Data inserted !!';
			$this->load->view('header');
			
			$this->load->view('appointment/Appointment',$data);
			$this->load->view('footer');




		} else {
			# code...

			$data['mess']='From validation !!';
			$this->load->view('header');
			
			$this->load->view('appointment/Appointment',$data);
			$this->load->view('footer');

			
		}
	}

}

/* End of file appointment.php */
/* Location: ./application/controllers/appointment.php */
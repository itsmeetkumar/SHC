<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function index()
	{
		$this->load->view('doctor/header');
		$this->load->view('doctor/doc_dash');
		$this->load->view('doctor/footer');
	}
	public function app()
	{
		# code...
		$this->load->view('doctor/header');
		$this->load->view('appointment/appointment');
		$this->load->view('doctor/footer');
	}
	public function search_dat()
	{
		$data = array('pid' =>$this->input->post('pid'));
			//$pid = $this->input->post('pid');

			$this->load->view('doctor/header');
			$this->load->view('doctor/doc_dash', $data);
			$this->load->view('doctor/footer');

	}
	public function predata()
	{
		# code...
		$this->load->view('doctor/header');
		$this->load->view('doctor/pre_data');
		$this->load->view('doctor/footer');
	}
	public function bb()
	{
		# code...
		$this->load->view('header');
		$this->load->view('bloodbank/bloodbank');
		$this->load->view('footer');
	}
	public function diagnosis()
	{
		# code...
		$this->load->view('doctor/header');
		$this->load->view('doctor/diagnosis');
		$this->load->view('doctor/footer');
	}
	public function in_dig()
	{
		# code...
		$this->form_validation->set_rules('pid', 'pid', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('d_data', 'd_data', 'required');
		$this->form_validation->set_rules('rem', 'rem', 'required');
		$this->form_validation->set_rules('other', 'other', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('pat_id' =>$this->input->post('pid') ,
				           'diag_date' =>$this->input->post('date'),
				           'diag_data' =>$this->input->post('d_data'),
				           'remarks' =>$this->input->post('rem'),
				           'other' =>$this->input->post('other')


				);

			$this->db->insert('pat_dia',$data);
			$data['mess']='Data inserted !!';
			$this->load->view('doctor/header');
			
			$this->load->view('doctor/diagnosis',$data);
			$this->load->view('doctor/footer');


		} else {
			# code...

			$data['mess']='From validation !!';
			$this->load->view('doctor/header');
			
			$this->load->view('doctor/diagnosis',$data);
			$this->load->view('doctor/footer');
		}



	}

	public function in_predata()
	{
		# code...
		$this->form_validation->set_rules('pid', 'pid', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('d_data', 'd_data', 'required');
		$this->form_validation->set_rules('rem', 'rem', 'required');
		$this->form_validation->set_rules('other', 'other', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('pat_id' =>$this->input->post('pid') ,
				           'date' =>$this->input->post('date'),
				           'pre_data' =>$this->input->post('d_data'),
				           'remark' =>$this->input->post('rem'),
				           'other' =>$this->input->post('other')


				);

			$this->db->insert('pres_data',$data);
			$data['mess']='Data inserted !!';
			$this->load->view('doctor/header');
			
			$this->load->view('doctor/pre_data',$data);
			$this->load->view('doctor/footer');


		} else {
			# code...

			$data['mess']='From validation !!';
			$this->load->view('doctor/header');
			
			$this->load->view('doctor/pre_data',$data);
			$this->load->view('doctor/footer');
		}



	}

}

/* End of file Doctor.php */
/* Location: ./application/controllers/Doctor.php */
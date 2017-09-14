<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chemist extends CI_Controller {

	public function index()
	{
		$this->load->view('chemist/header');
		$this->load->view('chemist/dashboard');
		$this->load->view('chemist/footer');	
	}
	public function dashboard()
	{
		$this->load->view('chemist/header');
		$this->load->view('chemist/dashboard');
		$this->load->view('chemist/footer');	
		
	}
	public function chemist_1()
	{
		# code...
		$this->load->view('chemist/header');
		$this->load->view('chemist/chemist');
		$this->load->view('chemist/footer');
	}
	public function kat()
	{
		# code...
		$this->load->view('chemist/header');
		$this->load->view('chemist/category');
		$this->load->view('chemist/footer');
	}
	public function med_view()
	{
		# code...
		$this->load->view('chemist/header');
		$this->load->view('chemist/med_view');
		$this->load->view('chemist/footer');
	}
	public function medicines()
	{
		# code...
		$this->load->view('chemist/header');
		$this->load->view('chemist/medicines');
		$this->load->view('chemist/footer');
	}
	public function add_medi()
	{
		# code...
		$this->form_validation->set_rules('med', 'med', 'required');
		$this->form_validation->set_rules('des', 'des', 'required');
		$this->form_validation->set_rules('kat', 'kat', 'required');
		$this->form_validation->set_rules('cost', 'cost', 'required');
		$this->form_validation->set_rules('quantity', 'quantity', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('name' =>$this->input->post('med'), 
							'des' =>$this->input->post('des'),
							'cat' =>$this->input->post('kat'),
							'cost' =>$this->input->post('cost'),
							'stock' =>$this->input->post('quantity')
						);

			$this->db->insert('medi_data',$data);

			$data['mess']='Data inserted !!';
			$this->load->view('chemist/header');
			
			$this->load->view('chemist/medicines',$data);
			$this->load->view('chemist/footer');


		} else {
			# code...
			$data['mess']='Validation error !!';
			$this->load->view('chemist/header');
			
			$this->load->view('chemist/medicines',$data);
			$this->load->view('chemist/footer');
		}


	}
	public function add_kat()
	{
		# code...
		$this->form_validation->set_rules('kat', 'kat', 'required');
		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('cat' =>$this->input->post('kat') );
			$this->db->insert('medi_cat',$data);

			$data['mess']='Data inserted !!';
			$this->load->view('chemist/header');
			
			$this->load->view('chemist/category',$data);
			$this->load->view('chemist/footer');

		} else {
			# code...
			$data['mess']='validation error !!';
			$this->load->view('chemist/header');
			
			$this->load->view('chemist/category',$data);
			$this->load->view('chemist/footer');
		}
	}
	public function in_chemist()
	{
		echo $this->input->post('ch_name');
		$this->load->model('patient');
		$this->form_validation->set_rules('ch_reg_no', 'ch_reg_no', 'required');
		//$this->form_validation->set_rules('ch_name ', 'ch_name', 'required');
		$this->form_validation->set_rules('ch_loc_1', 'ch_loc_1', 'required');
		$this->form_validation->set_rules('ch_loc_2', 'ch_loc_2', 'required');
		$this->form_validation->set_rules('ch_number', 'ch_number', 'required');
		$this->form_validation->set_rules('ch_address', 'ch_address', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
	
		$this->form_validation->set_rules('ch_ow_name', 'ch_ow_name', 'required');
		$this->form_validation->set_rules('ch_ow_age', 'ch_ow_age', 'required');
		$this->form_validation->set_rules('ch_ow_sex', 'ch_ow_sex', 'required');
		$this->form_validation->set_rules('ch_ow_email', 'ch_ow_email', 'required');
		$this->form_validation->set_rules('ch_ow_phone', 'ch_ow_phone', 'required');
		$this->form_validation->set_rules('ch_ow_address', 'ch_ow_address', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('ch_id' =>$this->input->post('ch_reg_no') , 
							'ch_name'=>$this->input->post('name'),
							'ch_loc_1'=>$this->input->post('ch_loc_1'),
							'ch_loc_2'=>$this->input->post('ch_loc_2'),
							'ch_number'=>$this->input->post('ch_number'),
							'ch_address'=>$this->input->post('ch_address'),
							'ch_ow_name'=>$this->input->post('ch_ow_name'),
							'ch_ow_age'=>$this->input->post('ch_ow_age'),
							'ch_ow_sex'=>$this->input->post('ch_ow_sex'),
							'ch_ow_email'=>$this->input->post('ch_ow_email'),
							'ch_ow_phone'=>$this->input->post('ch_ow_phone'),
							'ch_ow_address'=>$this->input->post('ch_ow_address')

				);

			$result = $this->patient->ch_data_chem($data);

			if($result == TRUE)
			{
				$data['mess']='match Found !!';
				$this->load->view('chemist/header');
			
				$this->load->view('chemist/chemist',$data);
				$this->load->view('chemist/footer');

			}
			else
			{
				//add into databas
				$this->db->insert('chemist',$data);

				$data['mess']='Data inserted !!';
			$this->load->view('chemist/header');
			
			$this->load->view('chemist/chemist',$data);
			$this->load->view('chemist/footer');
	
			
			}	






		} else {
			# code...
			$this->load->view('chemist/header');
			//echo "Validation Fail !!";
			$data['mess']="Validation Fail !!";
			$this->load->view('chemist/chemist',$data);
			$this->load->view('chemist/footer');
		}



	}


}

/* End of file Chemist.php */
/* Location: ./application/controllers/Chemist.php */
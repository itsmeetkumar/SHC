<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



	public function index()
	{
		//$this->load->view('header');
		//$this->load->view('hack/first');
		//$this->load->view('footer');		
	}
	public function home()
	{
		# code...
		$this->load->view('admin/header');
		$this->load->view('hack/final/doctor');
			
		$this->load->view('admin/footer');

	}
	public function chemist()
	{
		# code...
		$this->load->view('admin/header');
		$this->load->view('chemist/chemist');
		$this->load->view('admin/footer');
	}
	public function lab()
	{
		$this->load->view('admin/header');
		$this->load->view('labortory/lab');
		$this->load->view('admin/footer');
	}
	public function admin_pat()
	{
		# code...
		$this->load->view('admin/header');
		$this->load->view('hack/adate');
		$this->load->view('admin/footer');
	}

	public function demo()
	{
		$this->load->view('header');
		$this->load->view('labortory/lab');
			
		$this->load->view('footer');

	}
	public function demo1()
	{
		$this->load->view('header');
		$this->load->view('hack/hh');
		$this->load->view('footer');

	}
	public function demo2()
	{
		$this->load->view('header');
		$this->load->view('hack/adate');
			
		$this->load->view('footer');

	}
	public function patient()		
	{
		# code...
		$this->load->view('header');
		$this->load->view('patient/patient');
		$this->load->view('footer');
	}
	public function edit_patient()
	{
		# code...
		$this->load->view('header');
		$this->load->view('patient/edit_patient');
		$this->load->view('footer');
	}
	public function doctor()
	{
		# code...
		$this->load->view('header');
		$this->load->view('hack/final/doctor');
		$this->load->view('footer');
	}
	public function add_doc()
	{
		# code...

		$this->load->model('patient');

		# code...
		$this->form_validation->set_rules('d_code', 'd_code', 'trim|required|min_length[2]|max_length[5]');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('add', 'add', 'required');
		$this->form_validation->set_rules('sex', 'sex', 'required');
		$this->form_validation->set_rules('des', 'des', 'required');
		//$this->form_validation->set_rules('p_number', 'p_number', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
		$data = array('dr_code' =>$this->input->post('d_code'), 
					   'name' =>$this->input->post('name'),
					   'address' =>$this->input->post('add'),
					   'gender' =>$this->input->post('sex'),
					   'desi' =>$this->input->post('des'),		

			);

			$result = $this->patient->ch_data_doc($data);
			

			if($result == TRUE)
			{
				$data['mess']='match Found !!';
				$this->load->view('header');
			
				$this->load->view('hack/final/doctor',$data);
				$this->load->view('footer');

			}
			else
			{
				//add into databas
				$this->db->insert('doctor',$data);

				$data['mess']='Data inserted !!';
			$this->load->view('header');
			
			$this->load->view('hack/final/doctor',$data);
			$this->load->view('footer');
	
			
			}					

		} else {
			# code...
			$this->load->view('header');
			//echo "Validation Fail !!";
			$data['mess']="Validation Fail !!";
			$this->load->view('hack/final/doctor',$data);
			$this->load->view('footer');
		}


	}
public function update_patient($pid)
{
	# code...
	$data = array('pid' =>$pid);
	$this->load->view('header');
	$this->load->view('patient/edit_patient',$data);
	$this->load->view('footer');
}
public function update_pat()
{
	$data['pid'] = $this->input->get('pid');

	$this->load->view('header');
	$this->load->view('patient/edit_patient', $data);
	$this->load->view('footer');

	# code...
}
public function update_patient1()
	{
		$this->load->model('patient');

		# code...
		$this->form_validation->set_rules('p_number', 'p_number', 'trim|required|min_length[7]|max_length[13]');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('add', 'add', 'required');
		$this->form_validation->set_rules('sex1', 'sex1', 'required');
		$this->form_validation->set_rules('r_number', 'r_number', 'required');
		$this->form_validation->set_rules('age', 'age', 'required');
		$this->form_validation->set_rules('mailid', 'mailid', 'required');
		$this->form_validation->set_rules('pms', 'pms', 'required');
		$this->form_validation->set_rules('m_inc', 'm_inc', 'required');
		$this->form_validation->set_rules('pbg', 'pbg', 'required');
		$this->form_validation->set_rules('gname', 'gname', 'required');
		$this->form_validation->set_rules('gadd', 'gadd', 'required');
		$this->form_validation->set_rules('gp_number', 'gp_number', 'required');
		$this->form_validation->set_rules('sex', 'sex', 'required');
		$this->form_validation->set_rules('dep', 'dep', 'required');
		//$this->form_validation->set_rules('p_number', 'p_number', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
		$data = array('r_number' =>$this->input->post('r_number'), 
					   'name' =>$this->input->post('name'),
					   'age' =>$this->input->post('age'),
					   'add' =>$this->input->post('add'),
					   'psex' =>$this->input->post('sex1'),
					   'p_number' =>$this->input->post('p_number'),
					   'mailid' =>$this->input->post('mailid'),
					   'pms' =>$this->input->post('pms'),
					   'm_inc' =>$this->input->post('m_inc'),
					   'pbg' =>$this->input->post('pbg'),
					   'gname' =>$this->input->post('gname'),
					   'gadd' =>$this->input->post('gadd'),
					   'gp_number' => $this->input->post('gp_number'),
					   'sex' =>$this->input->post('sex'),
					   'dep' =>$this->input->post('dep')


			);

			
			
				//add into databas
				$this->db->where('r_number', $data['r_number']);
				$this->db->update('patient', $data);
				//$this->db->insert('patient',$data);

				$data['mess']='Data updated !!';
			$this->load->view('header');
			
			$this->load->view('patient/patient',$data);
			$this->load->view('footer');
	
			
				


							

		} else {
			# code...
			$this->load->view('header');
			//echo "Validation Fail !!";
			$data['mess']="Validation Fail !!";
			$this->load->view('patient/edit_patient',$data);
			$this->load->view('footer');
		}




	}



	public function add_patient()
	{
		$this->load->model('patient');

		# code...
		$this->form_validation->set_rules('p_number', 'p_number', 'trim|required|min_length[7]|max_length[10]');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('add', 'add', 'required');
		$this->form_validation->set_rules('sex1', 'sex1', 'required');
		$this->form_validation->set_rules('r_number', 'r_number', 'required');
		$this->form_validation->set_rules('age', 'age', 'required');
		$this->form_validation->set_rules('mailid', 'mailid', 'required');
		$this->form_validation->set_rules('pms', 'pms', 'required');
		$this->form_validation->set_rules('m_inc', 'm_inc', 'required');
		$this->form_validation->set_rules('pbg', 'pbg', 'required');
		$this->form_validation->set_rules('gname', 'gname', 'required');
		$this->form_validation->set_rules('gadd', 'gadd', 'required');
		$this->form_validation->set_rules('gp_number', 'gp_number', 'required');
		$this->form_validation->set_rules('sex', 'sex', 'required');
		$this->form_validation->set_rules('dep', 'dep', 'required');
		//$this->form_validation->set_rules('p_number', 'p_number', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
		$data = array('r_number' =>$this->input->post('r_number'), 
					   'name' =>$this->input->post('name'),
					   'age' =>$this->input->post('age'),
					   'add' =>$this->input->post('add'),
					   'psex' =>$this->input->post('sex1'),
					   'p_number' =>$this->input->post('p_number'),
					   'mailid' =>$this->input->post('mailid'),
					   'pms' =>$this->input->post('pms'),
					   'm_inc' =>$this->input->post('m_inc'),
					   'pbg' =>$this->input->post('pbg'),
					   'gname' =>$this->input->post('gname'),
					   'gadd' =>$this->input->post('gadd'),
					   'gp_number' => $this->input->post('gp_number'),
					   'sex' =>$this->input->post('sex'),
					   'dep' =>$this->input->post('dep')


			);

			$result = $this->patient->ch_data($data);
			

			if($result == TRUE)
			{
				$data['mess']='match Found !!';
			$this->load->view('header');
			
			$this->load->view('patient/patient',$data);
			$this->load->view('footer');

			}
			else
			{
				//add into databas
				$this->db->insert('patient',$data);

				$data['mess']='Data inserted !!';
			$this->load->view('header');
			
			$this->load->view('patient/patient',$data);
			$this->load->view('footer');
	
			
			}	


			//$this->db->insert('patient',$data);

		//$data['mess']='Data inserted !!';
		//$this->load->view('header');
			
			//$this->load->view('hack/final/patient',$data);
			//$this->load->view('footer');				

		} else {
			# code...
			$this->load->view('header');
			//echo "Validation Fail !!";
			$data['mess']="Validation Fail !!";
			$this->load->view('patient/patient',$data);
			$this->load->view('footer');
		}




	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
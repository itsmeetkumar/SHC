<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$this->load->view('app/test');
	}
	public function login()
	{
		$this->load->view('app/login');
	}
	public function logout() {
		$this->load->library('session');
// Removing session data
			$sess_array = array(
			'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['mess'] = 'Successfully Logout';
								//$this->load->view('app/header');
								$this->load->view('app/test',$data);
								//$this->load->view('app/footer');
}
	public function ch_login()
	{
		# code...
		$this->load->library('session');
		if (isset($this->session->userdata['logged_in'])) {
								$this->load->view('app/h1/header');
								$this->load->view('app/h1/bb');
								$this->load->view('app/h1/footer');
		}
		else {
				# code...
				
		
		$this->form_validation->set_rules('r_number', 'r_number', 'required');
		$this->form_validation->set_rules('pin', 'pin', 'required');

		if ($this->form_validation->run() == TRUE) {

						$condition = "r_number =" . "'" . $this->input->post('r_number') . "' AND " . "pin =" . "'" . $this->input->post('pin') . "'";
						$this->db->select('*');
						$this->db->from('patient');
						$this->db->where($condition);
						$this->db->limit(1);
						$query = $this->db->get();

						if ($query->num_rows() == 1) {
						$session_data1 = array(
								'r_number' => $this->input->post('r_number'),
								
								);
								// Add user data in session
								$this->session->set_userdata('logged_in', $session_data1);
								$this->load->view('app/h1/header');
								$this->load->view('app/h1/bb');
								$this->load->view('app/h1/footer');
						} else {
							//echo "Enter Correct Password ";
							$data['mess'] ="Enter Correct Password";
								//$this->load->view('app/header');
								$this->load->view('app/test',$data);
								//$this->load->view('app/footer');
						
						}

		} else {
			# code...
			//echo "form validation ";
			$data['mess'] ="Varify your form";
							//$this->load->view('app/header');
								$this->load->view('app/test',$data);
								//$this->load->view('app/footer');
		}
	}
	}

}

/* End of file app.php */
/* Location: ./application/controllers/app.php */
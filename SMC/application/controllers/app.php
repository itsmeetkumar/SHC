<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		$this->load->view('app/test');
	}
	public function in_app1()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/in_app');
		$this->load->view('app/h1/footer');
	}
	//blood bank function
	public function bb()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/bb');
		$this->load->view('app/h1/footer');
	}
	//blood presure function
	public function bp()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/bp');
		$this->load->view('app/h1/footer');

	}
	//temp health tracker function
	public function temp()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/temp');
		$this->load->view('app/h1/footer');
	}
	//health tracker gluc function
	public function gluc()
	{
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/gluc');
		$this->load->view('app/h1/footer');
	}
	//smart card view 
	public function smartcard()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/smarcard');
		$this->load->view('app/h1/footer');
	}
	//timeline function for patient app
	public function timeline()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/timeline/time');
		$this->load->view('app/h1/footer');
	}
	public function test()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/demo2');
		$this->load->view('app/h1/footer');
	}
	public function news()
	{
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/news');
		$this->load->view('app/h1/footer');

	}
	public function bloodbank()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('bloodbank/bloodbank');
		$this->load->view('app/h1/footer');
	}
	//bill module function 
	public function bill()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/bill');
		$this->load->view('app/h1/footer');
	}
	//chemist module function for app
	public function chemist()
	{
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/chemist');
		$this->load->view('app/h1/footer');
	}
	//appointment module function for app
	public function appointment()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/h1/appointment');
		$this->load->view('app/h1/footer');
	}
	//medication for patient 
	public function medications()
	{
		# code...
		$this->load->library('session');
		$this->load->view('app/h1/header');
		$this->load->view('app/medications/medication');
		$this->load->view('app/h1/footer');
	}

	public function in_gluc()
	{
		$this->load->library('session');
		if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['r_number']);
//$email = ($this->session->userdata['logged_in']['email']);

		$this->form_validation->set_rules('gluc', 'gluc', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('gluc' =>$this->input->post('gluc'), 
							'date'=>$this->input->post('date'),
							'r_number'=>$username
				);
			$this->db->insert('gluc',$data);

			$data['mess']='Data inserted !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/gluc',$data);
			 $this->load->view('app/h1/footer');

		} else {
			# code...
			$data['mess']='validation error !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/gluc',$data);
			 $this->load->view('app/h1/footer');
		}
	}
	}
	public function in_temp()
	{
		$this->load->library('session');
		if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['r_number']);
//$email = ($this->session->userdata['logged_in']['email']);

		$this->form_validation->set_rules('temp', 'temp', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('temp' =>$this->input->post('temp'), 
							'date'=>$this->input->post('date'),
							'r_number'=>$username
				);
			$this->db->insert('temp',$data);

			$data['mess']='Data inserted !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/temp',$data);
			 $this->load->view('app/h1/footer');

		} else {
			# code...
			$data['mess']='validation error !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/temp',$data);
			 $this->load->view('app/h1/footer');
		}
	}
	}
	public function in_bp()
	{
		$this->load->library('session');
		if (isset($this->session->userdata['logged_in'])) {
		$username = ($this->session->userdata['logged_in']['r_number']);
		//$email = ($this->session->userdata['logged_in']['email']);

		$this->form_validation->set_rules('bp', 'bp', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array('bp' =>$this->input->post('bp'), 
							'date'=>$this->input->post('date'),
							'r_number'=>$username
				);
			$this->db->insert('bp',$data);

			$data['mess']='Data inserted !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/bp',$data);
			 $this->load->view('app/h1/footer');

		} else {
			# code...
			$data['mess']='validation error !!';
			$this->load->view('app/h1/header');
			$this->load->view('app/h1/bp',$data);
			 $this->load->view('app/h1/footer');
		}
	}
	}
	//login view function
	public function login()
	{
		$this->load->view('app/login');
	}
	//logout function for patient application
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
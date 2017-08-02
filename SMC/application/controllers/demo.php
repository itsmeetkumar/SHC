<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('notice_body');
		$this->load->view('footer');
	}
	public function loc()
	{
		$this->load->view('loc');
	}
	public function search()
	{
		# code...
		$this->load->view('header');
		$this->load->view('sres');
		$this->load->view('footer');
	}
	public function pincode()
	{
		# code...
	$this->form_validation->set_rules('pincode', 'pincode', 'required');
	$this->form_validation->set_rules('city', 'city', 'required');
	
	if ($this->form_validation->run() == TRUE) {

		$data2 = array(
							'pincode' =>$this->input->post('pincode'),
							'city' =>$this->input->post('city')
							
							);
		$this->load->view('header');	
		$this->load->view('rs', $data2);
		//$this->load->view('loc');
	$this->load->view('footer');

		


		
	} else {
		# code...
		$this->load->view('header');
		$this->load->view('sres');
		$this->load->view('footer');
	}

	}
	public function adddata()
	{

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('pincode', 'pincode', 'required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$data = array(
							'name' =>$this->input->post('name'),
							'address' =>$this->input->post('address'),
							'city' =>$this->input->post('city'),
							'pincode' =>$this->input->post('pincode')
							);
			$this->db->insert('cdata',$data);




			
			$condition = "pincode =" . "'" . $this->input->post('pincode') . "' AND " . "city =" . "'" . $this->input->post('city') . "'";
			$this->db->select('*');
			$this->db->from('cdata');
			$this->db->where($condition);

			$query = $this->db->get();

			if($query->num_rows() > 1)
			{
				foreach ($query->result() as $row) {
					# code...
					//$row->id

					$data1 = array(
							'name' =>md5($this->input->post('name')),
							'address' =>md5($this->input->post('address')),
							'city' =>md5($this->input->post('city')),
							'pincode' =>md5($this->input->post('pincode')),
							'cid' =>$row->id
								);
					
					$this->db->insert('edata',$data1);
	


				}

				$data['mess']='Data Same store in warehouse and also store in encripted file';

			$this->load->view('header');
			$this->load->view('notice_body', $data);
			$this->load->view('footer');


			} 
			else
			{
				
			$data['mess']='Enter Data Successfully';

			$this->load->view('header');
			$this->load->view('notice_body', $data);
			$this->load->view('footer');


			}

			//$this->load->view('header');
			//$this->load->view('notice_body', $data);
			//$this->load->view('footer');


		} else {
			# code...

			$data['mess']='Enter Data Correct !!';

			$this->load->view('header');
			$this->load->view('notice_body', $data);
			$this->load->view('footer');


		}


	}

}

/* End of file demo.php */
/* Location: ./application/controllers/demo.php */
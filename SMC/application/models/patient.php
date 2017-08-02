<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Model {
	public function __construct()
	{
		parent::__construct();
				
	}


public function ch_data($data)
{
	//$con = "username =". "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
		$this->db->select('*');
		$this->db->from('patient');
		$array = array('r_number' => $data['r_number']);
	
		$this->db->where($array);

		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return true;
		}else
		{
			return false;
		}	



}
public function ch_data_doc($data)
{
	# code...
	$this->db->select('*');
		$this->db->from('doctor');
		$array = array('dr_code' => $data['dr_code']);
	
		$this->db->where($array);

		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return true;
		}else
		{
			return false;
		}	


}
public function ch_data_chem($data)
{
	# code...
	$this->db->select('*');
		$this->db->from('chemist');
		$array = array('ch_id' => $data['ch_id']);
	
		$this->db->where($array);

		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return true;
		}else
		{
			return false;
		}	


}
	

}

/* End of file patient.php */
/* Location: ./application/models/patient.php */
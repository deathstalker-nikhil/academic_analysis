<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addBatch($data)
	{
		return $this->db->insert('batches',$data);
	}

	public function addDepartment($data)
	{
		return $this->db->insert('departments',$data);
	}

	public function getDepartments()
	{
		$result = $this->db->get('departments');
		return $result->result_array();
	}

	public function getBatches()
	{
		$result = $this->db->get('batches');
		return $result->result_array();
	}

}

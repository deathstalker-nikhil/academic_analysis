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

	public function addStudent($data)
	{
		return $this->db->insert('students',$data);
	}

	public function addSubject($data)
	{
		return $this->db->insert('subjects',$data);
	}

	public function addSubjectToBatch($data)
	{
		return $this->db->insert('subjects_to_batches',$data);
	}

	public function addDepartment($data)
	{
		return $this->db->insert('departments',$data);
	}

	public function getSubjectDetails($id)
	{
		$result = $this->db->get_where('subjects',array('id' => $id));
		return $result->result_array();
	}

	public function getDepartments()
	{
		$result = $this->db->get('departments');
		return $result->result_array();
	}

	public function getStudents()
	{
		$result = $this->db->get('students');
		return $result->result_array();
	}

	public function getBatches()
	{
		$result = $this->db->get('batches');
		return $result->result_array();
	}

	public function getSubjects()
	{
		$result = $this->db->get('subjects');
		return $result->result_array();
	}
////
	public function getInternalScores($id)
	{
		$SQL = "SELECT `internal`,COUNT(`internal`) AS numberOfStudents FROM `scores` WHERE `subject_id`='$id' GROUP BY `internal`";
		$query = $this->db->query($SQL);
	return $query->result_array();
	}

	public function getExternalScores($id)
	{
		$SQL = "SELECT `external`,COUNT(`external`) AS numberOfStudents FROM `scores` WHERE `subject_id`='$id' GROUP BY `external`";
		$query = $this->db->query($SQL);
	return $query->result_array();
	}
/////

public function getExternalBackLogs($id)
{
	$SQL = "SELECT COUNT(`external`) AS numberOfBackLogs FROM `scores` WHERE `subject_id`='$id' AND `external`<30";
	$query = $this->db->query($SQL);
return $query->result_array();
}


	public function getMaxInternalScore($id)
	{
		$this->db->select_max('internal');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getMinInternalScore($id)
	{
		$this->db->select_min('internal');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getAvgInternalScore($id)
	{
		$this->db->select_avg('internal');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getMaxExternalScore($id)
	{
		$this->db->select_max('external');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getMinExternalScore($id)
	{
		$this->db->select_min('external');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getAvgExternalScore($id)
	{
		$this->db->select_avg('external');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getTotalAttempts($id)
	{

		$this->db->where('subject_id', $id);
		$result = $this->db->count_all_results('scores');
		return $result;
	}

}

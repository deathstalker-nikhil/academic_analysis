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

	public function getInternalScores($id)
	{
		$SQL = "SELECT `internal`,COUNT(`internal`) AS numberOfStudents FROM `scores` WHERE `subject_id`='$id' GROUP BY `internal`";
		$query = $this->db->query($SQL);
	return $query->result_array();
	}

	public function getInternalScoresBatch($id, $batch)
	{
			$sql = "select scores.internal, count(scores.internal) AS numberOfStudents from scores join students on students.id = scores.student_id where students.batch = 1 and scores.subject_id =1 GROUP BY scores.internal";
		$query = $this->db->query($sql);
	return $query->result_array();
	}

	public function score_prediction_internal($subject)
	{
			$sql = "SELECT AVG(scores.external) AS externalAverage, AVG(scores.internal) AS internalAverage from scores join students on students.id = scores.student_id where scores.subject_id = $subject GROUP BY students.batch";
		$query = $this->db->query($sql);
	return $query->result_array();
	}

	public function getExternalScoresBatch($id, $batch)
	{
			$sql = "select scores.external, count(scores.external) AS numberOfStudents from scores join students on students.id = scores.student_id where students.batch = 1 and scores.subject_id =1 GROUP BY scores.external";
		$query = $this->db->query($sql);
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

	public function getMaxInternalScoreBatch($id, $batch)
	{
		$sql = "select scores.internal from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id order by scores.internal desc limit 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getMinInternalScoreBatch($id, $batch)
	{
		$sql = "select scores.internal from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id order by scores.internal asc limit 1";
		$query = $this->db->query($sql);
		return $query->result_array();
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

	public function getAvgInternalScoreBatch($id, $batch)
	{
		$sql = "select AVG(scores.internal) AS internal from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getAvgExternalScoreBatch($id, $batch)
	{
		$sql = "select AVG(scores.external) AS external from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getMaxExternalScore($id)
	{
		$this->db->select_max('external');
		$result = $this->db->get_where('scores',array('subject_id' => $id));
		return $result->result_array();
	}

	public function getMaxExternalScoreBatch($id, $batch)
	{
		$sql = "select scores.external from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id order by scores.external desc limit 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getMinExternalScoreBatch($id, $batch)
	{
		$sql = "select scores.external from scores join students on students.id = scores.student_id where students.batch = $batch and scores.subject_id =$id order by scores.external asc limit 1";
		$query = $this->db->query($sql);
		return $query->result_array();
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

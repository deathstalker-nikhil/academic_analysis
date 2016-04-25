<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_lib {


	public function addBatch($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addBatch($data);
	}

	public function addStudent($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addStudent($data);
	}

	public function addDepartment($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addDepartment($data);
	}

	public function addSubject($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addSubject($data);
	}

	public function addSubjectToBatch($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addSubjectToBatch($data);
	}

	public function getDepartments()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getDepartments();
	}

	public function getBatches()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getBatches();
	}


	public function getSubjectDetails($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getSubjectDetails($id);
	}

	public function getMaxInternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMaxInternalScore($id);
	}

	public function getMaxInternalScoreBatch($id,$batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMaxInternalScoreBatch($id, $batch);
	}

	public function getMinInternalScoreBatch($id,$batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMinInternalScoreBatch($id, $batch);
	}

	public function getMinInternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMinInternalScore($id);
	}

	public function getAvgInternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getAvgInternalScore($id);
	}

	public function getAvgInternalScoreBatch($id,$batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getAvgInternalScoreBatch($id,$batch);
	}

	public function getAvgExternalScoreBatch($id,$batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getAvgExternalScoreBatch($id,$batch);
	}

	public function getMaxExternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMaxExternalScore($id);
	}

	public function getMaxExternalScoreBatch($id, $batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMaxExternalScoreBatch($id, $batch);
	}

	public function getMinExternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMinExternalScore($id);
	}

	public function getMinExternalScoreBatch($id, $batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMinExternalScoreBatch($id, $batch);
	}

	public function getAvgExternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getAvgExternalScore($id);
	}

	public function getTotalAttempts($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getTotalAttempts($id);
	}

	public function getInternalScores($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getInternalScores($id);
	}

	public function getInternalScoresBatch($id, $batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getInternalScoresBatch($id, $batch);
	}

	public function getExternalScoresBatch($id, $batch)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getExternalScoresBatch($id, $batch);
	}

	public function getExternalScores($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getExternalScores($id);
	}

	public function getExternalBackLogs($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getExternalBackLogs($id);
	}

	public function getStudents()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getStudents();
	}

	public function getSubjects()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getSubjects();
	}

}

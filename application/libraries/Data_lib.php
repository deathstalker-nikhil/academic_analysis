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

	public function getMaxExternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMaxExternalScore($id);
	}

	public function getMinExternalScore($id)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getMinExternalScore($id);
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

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_lib {


	public function addBatch($data)
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->addBatch($data);
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

	public function getSubjects()
	{
		$CI = & get_instance();
		$CI->load->model('data_model','data');
		return $CI->data->getSubjects();
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $head;
	var $foot;

		public function __construct()
	{
		parent::__construct();
		//$this->load->library(array('Data_lib','session'));
		$this->load->helper(array('url'));
		$data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$data['csrf_token'] = $this->security->get_csrf_hash();
		$this->head =  $this->load->view('common/head',$data,true);
		$this->foot =  $this->load->view('common/foot',$data,true);
		$this->left =  $this->load->view('common/left',$data,true);
	}

	public function batches()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['batches'] =  $this->data_lib->getBatches();
		$this->load->view('batches', $data);
	}

	public function add_scores()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('add_scores', $data);
	}

	public function add_subject_to_batch()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['batches'] =  $this->data_lib->getBatches();
		$data['subjects'] =  $this->data_lib->getSubjects();
		$this->load->view('add_subject_to_batch', $data);
	}

	public function departments()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['departments'] =  $this->data_lib->getDepartments();
		$this->load->view('departments', $data);
	}

	public function subject_analysis()
	{
		$id = 1;
		$this->load->library('Data_lib');
		$data['subject_details'] =  $this->data_lib->getSubjectDetails($id);
		$data['maxInternalScore'] = $this->data_lib->getMaxInternalScore($id);
		$data['minInternalScore'] = $this->data_lib->getMinInternalScore($id);
		$data['avgInternalScore'] = $this->data_lib->getAvgInternalScore($id);
		$data['maxExternalScore'] = $this->data_lib->getMaxExternalScore($id);
		$data['minExternalScore'] = $this->data_lib->getMinExternalScore($id);
		$data['avgExternalScore'] = $this->data_lib->getAvgExternalScore($id);
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->view('subject_analysis', $data);
	}

	public function subjects()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['subjects'] =  $this->data_lib->getSubjects();
		$this->load->view('subjects', $data);
	}

	public function students()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['students'] =  $this->data_lib->getStudents();
		$data['batches'] = $this->data_lib->getBatches();
		$this->load->view('students', $data);
	}

	public function add_subject()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['departments'] =  $this->data_lib->getDepartments();
		$this->load->view('add_subject', $data);
	}

	public function choose_subject_for_analysis()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['departments'] =  $this->data_lib->getDepartments();
		$this->load->view('choose_subject_for_analysis', $data);
	}

	public function add_student()
	{
		$data['head'] = $this->head;
		$data['foot'] = $this->foot;
		$data['left'] = $this->left;
		$this->load->library('Data_lib');
		$data['departments'] =  $this->data_lib->getDepartments();
		$data['batches'] =  $this->data_lib->getBatches();
		$this->load->view('add_student', $data);
	}

	public function addBatch()
	{
		$start_year = '';
		$end_year = '';

		if ($x = $this->input->post('start_year')) {
			$start_year = $x;
		}

		if ($x = $this->input->post('end_year')) {
			$end_year = $x;
		}


		if ($start_year==''||$end_year=='') {
			die("Incomple Details");
		}

			$data = array(
				'start_year' => $start_year,
				'end_year' => $end_year
				);
		$this->load->library('Data_lib');
		$result = $this->data_lib->addBatch($data);
		if ($result) {
			redirect(base_url('/batches'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function addStudent()
	{
		$name = '';
		$university_roll_number = '';
		$password = '';
		$batch = '';
		$department = '';

		if ($x = $this->input->post('name')) {
			$name = $x;
		}

		if ($x = $this->input->post('university_roll_number')) {
			$university_roll_number = $x;
		}

		$password = $university_roll_number;

		if ($x = $this->input->post('university_roll_number')) {
			$university_roll_number = $x;
		}

		if ($x = $this->input->post('batch')) {
			$batch = $x;
		}

		if ($x = $this->input->post('department')) {
			$department = $x;
		}



		if ($name==''||$university_roll_number==''||$password==''||$batch==''||$department=='') {
			die("Incomple Details");
		}

			$data = array(
				'name' => $name,
				'university_roll_number' => $university_roll_number,
				'password' => $password,
				'batch' => $batch,
				'department' => $department
				);
		$this->load->library('Data_lib');
		$result = $this->data_lib->addStudent($data);
		if ($result) {
			redirect(base_url('/students'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function addDepartment()
	{
		$department_name = '';

		if ($x = $this->input->post('department_name')) {
			$department_name = $x;
		}

		if ($department_name=='') {
			die("Incomple Details");
		}

			$data = array(
				'department_name' => $department_name
				);

		$this->load->library('Data_lib');
		$result = $this->data_lib->addDepartment($data);
		if ($result) {
			redirect(base_url('/departments'));
		}
		else {
			die("Some error Occured..:(");
		}
	}


	public function addSubject()
	{
		$department_id = '';
		$subject_code = '';
		$subject_name = '';

		if ($x = $this->input->post('subject_name')) {
			$subject_name = $x;
		}
		if ($x = $this->input->post('subject_code')) {
			$subject_code = $x;
		}
		if ($x = $this->input->post('department_id')) {
			$department_id = $x;
		}

		if ($department_id==''||$subject_code==''||$subject_name=='') {
			die("Incomplete Details");
		}

			$data = array(
				'subject_name' => $subject_name,
				'subject_code' => $subject_code,
				'department_id' => $department_id
				);
		$this->load->library('Data_lib');
		$result = $this->data_lib->addSubject($data);
		if ($result) {
			redirect(base_url('/subjects'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function addSubjectToBatch()
	{
		$subject_id = '';
		$batch_id = '';

		if ($x = $this->input->post('batch_id')) {
			$batch_id = $x;
		}

		if ($x = $this->input->post('subject_id')) {
			$subject_id = $x;
		}


		if ($batch_id==''||$subject_id=='') {
			die("Incomplete Details");
		}

			$data = array(
				'batch_id' => $batch_id,
				'subject_id' => $subject_id
				);
		$this->load->library('Data_lib');
		$result = $this->data_lib->addSubjectToBatch($data);
		if ($result) {
			redirect(base_url('/add_subject_to_batch'));
		}
		else {
			die("Some error Occured..:(");
		}
	}

	public function test($id='')
	{
		if ($id==1)
			return "one";
	}

}

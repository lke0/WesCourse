<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recommend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{	if(!isset($_POST['courseID'])) {
			$this->load->view('index');
		}
		else {
			$majors = array(
			);
			$courses = array();
			foreach ($_POST['courseID'] as $index => $courseID) {
				array_push($courses, array($courseID, $_POST['termID'][$index]));
			}
		
			$data['courses'] = $courses;
			$this->load->view('recommend', $data);
		}
	}
	
	
	public function upload() {
		$courses = [];
		foreach ($_POST['courses'] as $index => $course) {
			$courses[$index] = explode(",", $course);
		}	
		
		
		ini_set('display_errors', True);
		$this->load->model('student_model');
		$this->load->model('academic_history_model');
		$this->load->model('major_model');
		
		$student_id = $this->student_model->new_student();
		$this->major_model->set_student_major($student_id, $_POST['major']);
		$this->academic_history_model->set_academic_history($student_id, $courses);
		
	}			
}

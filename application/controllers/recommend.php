<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recommend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
}
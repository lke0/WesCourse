<?php 

class academic_history_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function set_academic_history($student_id, $courses)
	{	
		foreach ($courses as $course) {
			// courseID: $course[0]
			// term: $course[1]
			
			$data = array(
				'studentId' => $student_id,
				'courseId' => $course[0],
				'term' => $course[1]
			);
			
			$this->db->insert('student_course',$data);
		}
	}
	
	
	
		
}

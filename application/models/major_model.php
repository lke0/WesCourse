<?php 

class major_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function set_student_major($student_id, $major)
	{		
		foreach ($major as $this_major) {
			$data = array(
				'studentId' => $student_id,
				'majorId' => $this_major
			);
			
			$this->db->insert('student_major',$data);
		}
	}
	
	
	
		
}

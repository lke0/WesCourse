
<?php 

class student_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function new_student($year = 0)
	{	
		$data = array(
			'year' => $year
		);
		$this->db->insert('student',$data);
		$row = $this->db->query("SELECT LAST_INSERT_ID()")->row_array();
		
		$student_id = $row['LAST_INSERT_ID()'];
		return $student_id;
	}
	
	
	
		
}

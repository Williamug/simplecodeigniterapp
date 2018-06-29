<?php
	class Blog_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function mydb($slug = FALSE){
			if ($slug == FALSE) {
				// this produce 'SELECT * FROM news. This select all the data in the database.
				$query = $this->db->get('tb_codeigniter');
				return $query->result_array();
			}

			// this get_where method fetch all specified that in the database
			$query = $this->db->get_where('news', array('slug' => $slug));
			return $query->row_array();
		}
	}
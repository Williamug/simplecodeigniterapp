<?php
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->helper('anchor');
		}

		// loading a model
		// public function blog(){
		// 	
		// 	$this->blog_model->get_last_ten_entries();
		// }

		public function index(){
			$this->load->model('blog_model');
			$this->blog_model->mydb();

			$data['page_title'] = 'Home';
			$data['page_heading'] = 'Welcome to CiTodo List App';
			$data['todo_list'] = array(
				'Clean house',
				'Call mom',
				'Run Errands',
				'Home joy'	
			);

			$this->load->view('blogview', $data);
		}

		public function comments(){
			echo 'Hey, Look at this comment';
		}
	}
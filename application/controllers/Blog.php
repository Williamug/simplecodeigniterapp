<?php
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}

		// loading a model
		// public function blog(){
		// 	
		// 	$this->blog_model->get_last_ten_entries();
		// }

		public function index(){
			
			$this->output->cache(1);
			$this->load->model('blog_model');
			$this->blog_model->mydb();

			$data['page_title'] = 'Home';
			$data['page_heading'] = 'Welcome to CiTO List App';
			$data['page_discription'] = 'This application has been created using codeIgniter Framework with Bootstrap and Sass';
			$data['todo_list'] = array(
				'OceanCode',
				'Clean house',
				'Call mom',
				'Run Errands',
				'Home joy',
				'Dog in the field',
				'Google assistant',
				'Machine Learning',
				'AllSchool Academy',
					
			);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/nav', $data);
			$this->load->view('blogview', $data);
			$this->load->view('templates/footer', $data);
		}

		public function comments(){
			echo 'Hey, Look at this comment';
		}
	}
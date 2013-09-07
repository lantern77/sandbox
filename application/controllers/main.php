<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/* 
	Main Controller
	*******************

	Class Name: 	Main 
	Author: 		Kulwinder Billen, Albert Dani, Mike Moniz, Thusanthan Kannan & SE CLUB
	Description: 	

*/

	class Main extends CI_Controller {

		

		public function index()
		{
			$this->load->model('newsmodel','',TRUE);
			$this->goHome();
		}

		public function goHome ()
		{
			$data = array();
			$this->load->view('header',$data);
			$this->load->view('home',$data);
			$this->load->view('footer',$data);
		}


		public function goNews()
		{
			$this->load->model('newsmodel','',TRUE);
			$data['news'] = array_reverse($this->newsmodel->get_all());

			$data['title'] = 'NEWS';
			$this->load->view('header',$data);
			$this->load->view('news',$data);
			$this->load->view('footer',$data);
		}

		public function login()
		{
			$this->load->view('admin/admin_header');
			$this->load->view('admin/login');
			$this->load->view('admin/admin_footer');
		}
	
		
	}
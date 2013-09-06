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
			$this->news();
		}

		public function news()
		{
			$data['news'] = array_reverse($this->newsmodel->get_all());

			$data['title'] = 'NEWS';
			$this->load->view('header',$data);
			$this->load->view('home',$data);
			$this->load->view('footer',$data);
		}

		public function login()
		{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
	
		
	}
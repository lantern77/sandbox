<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/* 
	Main Controller
	*******************

	Class Name: 	Admin 
	Author: 		Kulwinder Billen, Albert Dani, Mike Moniz, Thusanthan Kannan & SE CLUB
	Description: 	The following class encompasses all of the admin functions 

*/
	class Admin extends CI_Controller {

		public $isLogged = 0;
		public $user = NULL;

		public function index() {
			$this->postsMenu();
		}

		public function postsMenu() {

			if ($this->isLogged == 1) {

				$this->load->model('newsmodel','',TRUE);

				$data['title'] = 'Admin Menu';
				$data['isLogged'] = $this->isLogged;
				$data['news'] = array_reverse($this->newsmodel->get_all());

				if (isset($this->user)) {$data['user'] = $this->user;}

				$this->load->view('header',$data);
				$this->load->view('admin_view',$data);
				$this->load->view('footer',$data);
			}

			else {
				
				$this->load->view('header');
				$this->load->view('formFail');
				$this->load->view('footer');
			}
		}

		public function login() {
			$this->load->model('adminModel','',TRUE);
			$this->load->model('newsmodel','',TRUE);
		
			$login_user=$this->input->post('user');
			$login_pass=$this->input->post('pass');


			$isUser = $this->adminModel->checkUser($login_user,$login_pass);
			
			
			if ($isUser == 0 || $isUser == 1)
			{
				$this->load->view('header');
				$this->load->view('formFail');
				$this->load->view('footer');
			}
			if ($isUser == 2)
			{
				$this->isLogged = 1;
				$this->user = $login_user;
				$this->postsMenu();
			}
		}

		public function deletePost($id, $isLogged)
		{
			if ($isLogged = 1)
			{
				$this->load->model('newsmodel','',TRUE);
				$this->newsmodel->delete($id);

			
				$data['title'] = 'Admin Menu';
				$data['isLogged'] = $this->isLogged;
				$data['news'] = array_reverse($this->newsmodel->get_all());
				if (isset($this->user)) {$data['user'] = $this->user;}
				$this->load->view('header',$data);
				$this->load->view('admin_view',$data);
				$this->load->view('footer',$data);

			}
		}

		public function newpostload($isLogged)
		{
			$this->load->model('adminModel','',TRUE);
			$info['info'] = $this->adminModel->get_all();
			$info['isLogged'] = $isLogged;
			
			if ($isLogged = 1)
			{
				$this->load->view('header',$info);
				$this->load->view('newpost_view',$info);
				$this->load->view('footer',$info);
			}
		}

		public function newPost ()
		{
			$isLogged = $this->input->post('logged');
			if ($this->isLogged = 1)
			{
				$post_name=$this->input->post('postName');
				$post_author=$this->input->post('authors');
				$post_text=$this->input->post('content');

				$array = array("name" => "".$post_name,
							   "author" => "".$post_author,
							   "date" =>  "".date("Y-m-d H:i:s"),
							   "content" => "".$post_text,

					);
				$this->load->model('newsmodel','',TRUE);
				$this->newsmodel->insert($array);
			}
		}

		



	}
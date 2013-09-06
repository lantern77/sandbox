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

			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$isSession = empty($session_user);
			if ($isSession == FALSE) {

				$this->load->model('newsmodel','',TRUE);

				$data['title'] = 'Admin Menu';
				$data['user'] = $session_user;
				$data['news'] = array_reverse($this->newsmodel->get_all());

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
				$this->load->library('session');
				$this->user = $login_user;
       			$this->session->set_userdata('logged_in', $login_user);
				$this->postsMenu();
			}
		}

		public function deletePost($id)
		{
			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$isSession = empty($session_user);
			if ($isSession == FALSE) 
			{
				$this->load->model('newsmodel','',TRUE);
				$this->newsmodel->delete($id);
				$this->postsMenu();

			}
			else
			{
				$this->load->view('header');
				$this->load->view('formFail');
				$this->load->view('footer');
			}
		}

		public function newpostload($user)
		{
			$this->load->model('adminModel','',TRUE);
			$info['info'] = $this->adminModel->get_all();
		
			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$isSession = empty($session_user);
			if ($isSession == FALSE) {
			
				$this->load->view('header',$info);
				$this->load->view('newpost_view',$info);
				$this->load->view('footer',$info);
			}
			else
			{
				$this->load->view('header');
				$this->load->view('formFail');
				$this->load->view('footer');
			}
		}

		public function newPost ()
		{
			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$isSession = empty($session_user);
			if ($isSession == FALSE) 
			{
				$post_name=$this->input->post('postName');
				$post_author=$session_user;
				$post_text=$this->input->post('content');

				$array = array("name" => "".$post_name,
							   "author" => "".$post_author,
							   "date" =>  "".date("Y-m-d H:i:s"),
							   "content" => "".$post_text,

					);
				$this->load->model('newsmodel','',TRUE);
				$this->newsmodel->insert($array);

				$this->postsMenu();
			}
			else
			{
				$this->load->view('header');
				$this->load->view('formFail');
				$this->load->view('footer');
			}
		}

		public function logout()
		{
			  $this->load->library('session');
			  $this->session->unset_userdata('logged_in');
			  $this->load->helper('url');
   			  $this->session->sess_destroy();
   			  $data['msg'] = 'Returning to home page';
   			  $this->load->view('header');
			  $this->load->view('formFail',$data);
			  $this->load->view('footer');
   			  



		}

		



	}
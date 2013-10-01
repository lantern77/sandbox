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

			// Setup Session
			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$isSession = empty($session_user);


			if ($isSession == FALSE) {

				$this->load->model('newsmodel','',TRUE);

				$data['title'] = 'Admin Menu';
				$data['user'] = $session_user;
				$data['news'] = array_reverse($this->newsmodel->get_all());

				$this->load->view('admin/admin_header',$data);
				$this->load->view('admin/admin_view',$data);
				$this->load->view('admin/admin_footer',$data);
			}

			else {
				
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
			}
		}

		public function formRedirect($data)
		{
				$this->load->view('admin/admin_header',$data);
				$this->load->view('admin/formFail',$data);
				$this->load->view('admin/admin_footer',$data);
		}

		public function login() {
			$this->load->model('adminModel','',TRUE);
			$this->load->model('newsmodel','',TRUE);
		
			$login_user=$this->input->post('user');
			$login_pass=$this->input->post('pass');


			$isUser = $this->adminModel->checkUser($login_user,$login_pass);
			
			
			if ($isUser == 0 || $isUser == 1)
			{
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
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
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
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
			
				$this->load->view('admin/admin_header',$info);
				$this->load->view('admin/newpost_view',$info);
				$this->load->view('admin/admin_footer',$info);
			}
			else
			{
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
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

				$array = array("name" => ''.$post_name,
							   "author" => ''.$post_author,
							   "date" =>  ''.date("Y-m-d H:i:s"),
							   "content" => ''.$post_text);



				$this->load->model('newsmodel','',TRUE);
				//$insertid = $this->newsmodel->insert($array);
				//$data['msg'] = $insertid; 
				$this->newsmodel->addNewsItem($array['author'],$array['name'],$array['date'],$array['content'],'');
				$data['msg'] = 'New Post Created! Going back to Admin Panel';
   			  	$data['url'] = $this-> redirectURL('admin/postsMenu');
				$this->formRedirect($data);

	
			}
			else
			{
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
			}
		}

		public function logout()
		{
			  $this->load->library('session');
			  $this->session->unset_userdata('logged_in');
			  $this->load->helper('url');
   			  $this->session->sess_destroy();
   			  $data['msg'] = 'Returning to home page';
   			  $data['url'] = $this-> redirectURL('');
   			  $this->formRedirect($data);	
   			  
		}

		public function redirectURL ($page)
		{
			$url = site_url().'/'.$page;
			return $url;
		}

		



	}
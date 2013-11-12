<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/* 
	Main Controller
	*******************

	Class Name: 	Admin 
	Author: 		Kulwinder Billen, Albert Dani, Mike Moniz, Thusanthan Kannan & SE CLUB
	Description: 	The following class encompasses all of the admin functions 

*/
	class Admin extends CI_Controller {

		public $isUser = 0;
		public $isSession = NULL;
		public $user = NULL;
		

		function __construct() {
     		  parent::__construct();
     		  $this->user = $this->getUser();
   		}

		public function index() {
			$this->postsMenu();
			
		}

		public function postsMenu() {


			if ($this->isSession == FALSE) {

				$this->load->model('newsmodel','',TRUE);

				$data['title'] = 'Admin Menu';
				$data['user'] = $this->user;
				$data['news'] = array_reverse($this->newsmodel->get_all());

				$this->load->view('admin/admin_header',$data);
				$this->load->view('admin/admin_view',$data);
				$this->load->view('admin/admin_footer',$data);
			}

			else {
				
				$this->redirect('Login Unsuccessful! Returning to home page','');
				
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
				$data['msg'] = 'Login Unsuccessful! Returning to home page';
   			  	$data['url'] = $this-> redirectURL('');
				$this->formRedirect($data);
			}
			if ($isUser == 2)
			{
				$this->load->library('session');
				$this->user = $login_user;
       			$this->session->set_userdata('logged_in', $login_user);
       			$this->user = $this->getUser();	
				$this->postsMenu();
			}
		}

		public function deletePost($id)
		{
			
			


			if ($this->isSession == FALSE) 
			{
				$this->load->model('newsmodel','',TRUE);
				$this->newsmodel->delete($id);
				$this->postsMenu();

			}
			else
			{
				$this->redirect('Login Unsuccessful! Returning to home page','');
			}
		}

		public function getPostData()
		{
			
			

			if ($this->isSession == FALSE) 
			{
				$post_name=$this->input->post('postName');
				$post_author= strval($this->user);
				$post_text=$this->input->post('content');

				$array = array("name" => ''.$post_name,
							   "author" => ''.$post_author,
							   "date" =>  ''.date("Y-m-d H:i:s"),
							   "content" => ''.$post_text);
				$this->newPost($array, $this->isSession);
			} else {

				$this->redirect('Login Unsuccessful! Returning to home page','');
			}

		}

		public function newpostload()
		{
			
			
			
			if ($this->isSession == FALSE) {
			
				$this->load->view('admin/admin_header');
				$this->load->view('admin/newpost_view');
				$this->load->view('admin/admin_footer');
			}
			else
			{
				$this->redirect('Login Unsuccessful! Returning to home page','');
			}
		}

		public function newPost ($array, $isSession)
		{
			
			 	
				$this->load->model('newsmodel','',TRUE);
				//$insertid = $this->newsmodel->insert($array);
				
				$isArray = isset($array['name']);

				if ($isArray)
				{
						
						$this->newsmodel->addNewsItem($array['author'],$array['name'],$array['date'],$array['content'],'');
						$this->redirect('New Post Created! Going back to Admin Panel','admin/postsMenu');	
				}
				else
				{
					$this->redirect('#seriousdoe, why you trying to break the site? ... your going back to the homepage','');
					
				}
	
		}

	
		public function getUser()
		{
			$this->load->library('session');
			$session_user = $this->session->userdata('logged_in');
			$this->isSession = empty($session_user);
			if ($this->isSession == FALSE)
			{
				return $session_user;
			}
			else
			{
				return FALSE;
			}
			
		}

		public function logout()
		{
			  $this->load->library('session');
			  $this->session->unset_userdata('logged_in');
			  $this->load->helper('url');
   			  $this->session->sess_destroy();
   			  $this->redirect('Returning to the home page','');  
		}


		/** REDIRECTION CODE **/
		public function redirectURL ($page)
		{
			$url = site_url().'/'.$page;
			return $url;
		}

		public function formRedirect($data)
		{
				$this->load->view('admin/admin_header',$data);
				$this->load->view('admin/formFail',$data);
				$this->load->view('admin/admin_footer',$data);
		}

		public function redirect($msg, $url)
		{
			$link = $this->redirectURL($url);
			$data['msg'] = $msg;
			$data['url'] = $link;
			$this->formRedirect($data);
		}

		



	}
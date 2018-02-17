<?php 

	/**
	* 
	*/
	class Admin extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function login(){
			$this->view->header();
			$this->view->render('admin/login.php');
		}

		public function logout(){
			session_destroy();
			header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/blog");
		}

		public function index(){
			$this->view->header();
			if(!empty($_SESSION['username'])){
				$this->view->headerAdmin();
				$this->view->render("admin/index.php");
			}
		}

		
		public function postlist(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			$data =$this->model->getAllPost();
			$this->view->header();
			$this->view->headerAdmin();
			$this->view->render('admin/manager-post.php',$data);
		}
		public function newpost(){
			require_once(MODEL.'ProcessPost.php');
			$this->view->header();
			$this->view->headerAdmin();
			$this->view->render('admin/create-post.php');
		}


	}
?>
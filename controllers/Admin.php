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
			//Require model to check account
			require_once(MODEL."ProcessAccount.php");
			$this->model = new ProcessAccount();
			//Make sure username and password not empty
			if(!empty($_POST["username"]) && !empty($_POST["password"])){
				//Check exist account
				if($this->model->checkAccount($_POST['username'],$_POST['password'])){
					//Make seesion to account 
					$this->model->getInfo($_POST['username'],$_POST['password']);
				}
			}
		}

		public function logout(){
			//Destroy all session
			session_destroy();
			header("Location: index.php");
		}

		public function index(){
			$this->view->header();
			if(!empty($_SESSION['username'])){
				$this->view->headerAdmin();
				$this->view->render("admin/index.php");
			}else{
				$this->view->render('admin/login.php');
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
			$this->view->header();
			$this->view->headerAdmin();
			$this->view->render('admin/create-post.php',$this->initData);
		}

		public function savepost(){
			//Required model
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view page
			$this->view->header();
			$this->view->headerAdmin();
			
			//Process data
			$title = empty($_POST['title'])? false: $_POST['title'];
			$content = empty($_POST['content'])? false:$_POST['content'];
			$id = $_SESSION['id'];
			$category_id = empty($_POST['category_id'])? false:$_POST['category_id'];
			$timedate = date('Y-m-d H:i:s');	
			if($title)
				$url = str_replace(' ', '-', $title);
			//Save post
			if($title && $content && $id && $category_id && $timedate && $url){
				$result = $this->model->insertPost($title,$content,$id,$category_id,$timedate,$url);
				print_r($result);
			}else{
				echo "Error! Can't be save this post, maybe wrong something.";
			}

		}

	}
?>
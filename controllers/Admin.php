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
				}else{
					$error = "Wrong username or password";
					$this->view->header();
					$this->view->render('admin/login.php',$error);
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
		//---------------------------------CREATE POST----------------------------//
		public function newpost(){
			$this->view->header();
			$this->view->headerAdmin();
			$this->view->render('admin/create-post.php',$this->initData);
		}

		//Save for new post
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
			}else{
				echo "Error! Can't be save this post, maybe wrong something.";
			}

		}
		//---------------------------------CREATE POST----------------------------//

		//---------------------------------EDIT POST----------------------------//
		public function editPost(){
			$this->view->header();
			$this->view->headerAdmin();

			//Process id post 
			$id = isset($_GET['id'])? $_GET['id']:false;
			if($id){
				//Require model 
				require_once(MODEL.'ProcessPost.php');
				$this->model = new ProcessPost();
				//Get post with id
				$data = $this->model->getPost($id);
				//Transfer data to edit
				$this->view->render('admin/edit-post.php',$this->initData,$data);
			}else{
				echo "Something wrong!";
			}
		}

		public function saveEditPost(){
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->header();
			$this->view->headerAdmin();
			//Process data
			$id_post = empty($_GET['id'])? false:$_GET['id'];
			$title = empty($_POST['title'])? false: $_POST['title'];
			$content = empty($_POST['content'])? false:$_POST['content'];
			$category_id = empty($_POST['category_id'])? false:$_POST['category_id'];
			if($title)
				$url = str_replace(' ', '-', $title);
			//Update post
			if($id_post && $title && $content && $category_id && $url){
				$result = $this->model->updatePost($id_post,$title,$content,$_SESSION['id'],$category_id,$url);
				echo "Sửa thành công.";
			}else{
				echo "Error! Can't be save this post, maybe wrong something.";
			}
		}

		//---------------------------------EDIT POST----------------------------//
		
		//---------------------------------DELETE POST----------------------------//

		public function deletePost(){
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->header();
			$this->view->headerAdmin();
			//Process data
			$id_post = empty($_GET['id'])? false:$_GET['id'];
			if($id_post){
				$this->model->deletePost($id_post);
			}
		}
		//---------------------------------DELETE POST----------------------------//


		//---------------------------------CREATE CATEGORY----------------------------//

		public function newcategory(){
			$this->view->header();
			$this->view->headerAdmin();
			$this->view->render('admin/create-category.php',$this->initData);
		}

		public function saveCategory(){
			
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->header();
			$this->view->headerAdmin();
			//Process data
			$title = empty($_POST['titleOfCategory'])? false: $_POST['titleOfCategory'];
			$description = empty($_POST['description'])? null:$_POST['description'];
			if($title)
				$url = str_replace(' ', '-', $title);
			if($title && $url){
				$result = $this->model->insertCategory($title,$url,$description);
				print_r($result);
				header("Location: index.php?c=admin&a=newcategory");
			}else{
				echo "Error! Something wrong!";
			}

		}
		//---------------------------------CREATE CATEGORY----------------------------//

	}
?>

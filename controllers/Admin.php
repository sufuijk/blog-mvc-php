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


		public function index(){
			if(!empty($_SESSION['user']->username)){
				$this->view->headerAdmin($this->initData);
				$this->view->render("admin/index.php");
				$this->view->footerAdmin();

			}else{
				$this->view->render('admin/login.php');
			}
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
					$this->view->render('admin/login.php',$error);
				}
			}
		}

		public function logout(){
			//Destroy all session
			session_destroy();
			header("Location: index.php");
		}

		

		
		public function listPost(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			$data =$this->model->getAllPost();
			$this->view->headerAdmin($this->initData);
			$this->view->render('admin/manager-post.php',$data,$this->User);
			$this->view->footerAdmin();
		}
		public function listCategory(){
			$this->view->headerAdmin($this->initData);
			$this->view->render("admin/manager-category.php",$this->initData);
			$this->view->footerAdmin();

		}
		public function listUser(){
			require_once(MODEL.'ProcessAccount.php');
			$this->model = new ProcessAccount();
			$data =$this->model->getAllUser();
			$this->view->headerAdmin($this->initData);
			$this->view->render('admin/manager-user.php',$data);
			$this->view->footerAdmin();
		}
		//---------------------------------CREATE POST----------------------------//
		//Save for new post
		public function savePost(){
			//Required model
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view page
			$this->view->headerAdmin($this->initData);
			
			//Process data
			$title = empty($_POST['title'])? false: $_POST['title'];
			$content = empty($_POST['content'])? false:$_POST['content'];
			$id = $_SESSION['user']->id;
			$category_id = empty($_POST['category_id'])? false:$_POST['category_id'];
			$timedate = date('Y-m-d H:i:s');	
			if($title){
				$url = trim($title);
				$url = $this->model->makeTitleLink($url);
			}
				
			//Save post
			if($title && $content && $id && $category_id && $timedate && $url){
				$result = $this->model->insertPost($title,$content,$id,$category_id,$timedate,$url);
				if($result){
					echo "Create new post successfully!";
				}
			}else{
				echo "Error! Can't be save this post, maybe wrong something.";
			}
			$this->view->footerAdmin();

		}

		//---------------------------------EDIT POST----------------------------//
		

		public function saveEditPost(){
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->headerAdmin($this->initData);
			//Process data
			$id_post = empty($_GET['id'])? false:$_GET['id'];
			$title = empty($_POST['title'])? false: $_POST['title'];
			$content = empty($_POST['content'])? false:$_POST['content'];
			$category_id = empty($_POST['category_id'])? false:$_POST['category_id'];
			if($title){
				$url = trim($title);
				$url = $this->model->makeTitleLink($url);
				
			}
			//Update post
			if($id_post && $title && $content && $category_id && $url){
				$result = $this->model->updatePost($id_post,$title,$content,$_SESSION['user']->id,$category_id,$url);
				echo "Sửa thành công.";
			}else{
				echo "Error! Can't be save this post, maybe wrong something.";
			}
			$this->view->footerAdmin();
		}

		
		//---------------------------------DELETE POST----------------------------//

		public function deletePost(){
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->headerAdmin($this->initData);
			//Process data
			$id_post = empty($_GET['id'])? false:$_GET['id'];
			$grantUser = $_SESSION['user']->phanquyen;
			$userID = $_SESSION['user']->id;
			if($id_post){
				$this->model->deletePost($id_post,$grantUser,$userID);
			}
			$this->view->footerAdmin();
		}


		//---------------------------------CREATE CATEGORY----------------------------//


		public function saveCategory(){
			
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->headerAdmin($this->initData);
			//Process data
			$title = empty($_POST['titleOfCategory'])? false: $_POST['titleOfCategory'];
			$description = empty($_POST['description'])? null:$_POST['description'];
			if($title)
				$url = str_replace(' ', '-', $title);
			if($title && $url){
				$result = $this->model->insertCategory($title,$url,$description);
				echo "Create category successfully!";

			}else{
				echo "Error! Something wrong!";
			}
			$this->view->footerAdmin();

		}

		public function saveEditCategory(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->headerAdmin($this->initData);
			//Process data
			$title = empty($_POST['titleOfCategory'])? false: $_POST['titleOfCategory'];
			$description = empty($_POST['description'])? null:$_POST['description'];
			$id = empty($_GET['id'])? false:$_GET['id'];
			if($title)
				$url = str_replace(' ', '-', $title);
			if($title && $url && $id){
				$result = $this->model->updateCategory($title,$url,$description,$id);
				echo ($result)? "Save edit category successfully!":"Something wrong!";
			}else{
				echo "Error! Something wrong!";
			}
			$this->view->footerAdmin();
		}
		//---------------------------------DELETE POST----------------------------//

		public function deleteCategory(){
			//Require model 
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			
			//Process data
			$grant_user = ($_SESSION['user']->phanquyen == 0 )? true:false;

			$category_id = empty($_GET['id'])? false:$_GET['id'];
			if($category_id && $grant_user){
				$this->model->deleteCategory($category_id);
			}
		}
		//---------------------------------CREATE USER----------------------------//

		public function addUser(){
			//Require model 
			require_once(MODEL.'ProcessAccount.php');
			$this->model = new ProcessAccount();
			//Process data
			$firstname = empty($_POST['firstname'])? false: $_POST['firstname'];
			$lastname = empty($_POST['lastname'])? false: $_POST['lastname'];
			$gender = empty($_POST['gender'])? false: $_POST['gender'];
			$email = empty($_POST['email'])? false: $_POST['email'];
			$username = empty($_POST['username'])? false: $_POST['username'];
			$password = empty($_POST['password'])? false: $_POST['password'];
			$phanquyen = empty($_POST['phanquyen'])? false: $_POST['phanquyen'];
			$phanquyen = ($phanquyen == "Admin")? 0:1;
			// chua xu ly phan quyen 
			if($firstname && $lastname && $gender && $email && $username && $password && $phanquyen){
				$result = $this->model->insertUser($firstname,$lastname,$gender,$email,$username,$password,$phanquyen);
				print_r($result);
			}else{
				echo "Have something wrong!";
			}
		}

		public function myProfile(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			//Render view pagee
			$this->view->headerAdmin($this->initData);
			//Process data
			$this->view->render("admin/profile-user.php");


			$this->view->footerAdmin();
		}

		public function uploadImage(){
			require_once(MODEL.'ProcessAccount.php');
			$this->model = new ProcessAccount();
			if(isset($_POST['upload'])){
				$target = "./public/img/".basename($_FILES['image']['name']);
				$image = $_FILES['image']['name'];
				$userid = $_SESSION['user']->id;

				$this->model->updateImage($image,$userid);
				if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
					$msg = "Upload successfully!";
					$_SESSION['user']->image = $image;
					header("Location: index.php?c=admin&a=myProfile");
				}else{
					$msg = "Upload failed!";
				}
			}
		}
		public function changePass(){
			require_once(MODEL.'ProcessAccount.php');
			$this->model = new ProcessAccount();
			//Process data
			$userID = $_SESSION['user']->id;
			$username = $_SESSION['user']->username;
			$Password = empty($_POST['password'])? false: $_POST['password'];
			$Repassword = empty($_POST['re-password'])? false: $_POST['re-password'];
			//Change pass
			if(isset($_POST['submitChange'])){
				if($Password && $Repassword){
					$result = $this->model->checkAccount($username,$Password);
					if($result == 1){
						$this->model->changePass($userID,$Repassword);
						session_destroy();
						header("Location: index.php?c=admin");
						return json_encode("Change pass successfully!");
					}else{
						header("Location: index.php?c=admin");
						return json_encode("Wrong password!");
					}
				}
			}
		}
		public function saveEditUser(){
			require_once(MODEL.'ProcessAccount.php');
			$this->model = new ProcessAccount();
			//Process data
			$userID = $_SESSION['user']->id;
			$firstname = empty($_POST['firstname'])? false: $_POST['firstname'];
			$lastname = empty($_POST['lastname'])? false: $_POST['lastname'];
			$gender = empty($_POST['gender'])? false: $_POST['gender'];
			$email = empty($_POST['email'])? false: $_POST['email'];
			
			//Save
			if(isset($_POST["changeInfoSubmit"])){
				if($firstname && $lastname && $gender && $email){
					$this->model->updateUser($userID,$firstname,$lastname,$gender,$email);
					$_SESSION['user'] = $this->model->getUser($userID);
					header("Location: index.php?c=admin&a=myProfile");
					
				}else{
					echo "Wrong";
				}
			}
			

			
		}

	}
?>

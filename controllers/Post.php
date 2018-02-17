<?php

	/**
	* 
	*/
	class Post extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function view(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();

			if(isset($_GET["id"])){
				$post_id = $_GET["id"];
			}else{
				echo "Not found 404";
			}

			$data = $this->model->getPost($post_id);

			//Render view
			$this->view->header();
			$this->view->render("home/welcome.php",$this->initData);
			$this->view->render("home/post.php",$data);
			$this->view->footer();
		}
	}

?>
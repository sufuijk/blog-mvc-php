<?php 

	/**
	* 
	*/
	class Category extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		//Find posts of category
		public function list(){
			
			$category_url = isset($_GET['category_url'])? $_GET['category_url']:"Uncategory";
			require_once(MODEL."ProcessPost.php");
			$this->model = new ProcessPost();

			$category_id = $this->model->getCategoryId($category_url);
			$category = $this->model->getCategory($category_id);
			$data = $this->model->getPostofCategory($category_id);
			//Render to home 
			$this->view->header();
			$this->view->render('home/welcome.php',$this->initData);
			$this->view->render('home/category.php',$data,$category);
			$this->view->footer();
		}

		public function allInfoCategory(){
			require_once(MODEL.'ProcessPost.php');
			$this->model = new ProcessPost();
			
			$category_id = (isset($_GET['category_id']))? $_GET['category_id']:false;
			if($category_id)
				$data = $this->model->getCategory($category_id);
			echo json_encode($data);
		}
	}
?>



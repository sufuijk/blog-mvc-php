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
			
			$category_link = isset($_GET['category_link'])? $_GET['category_link']:"Uncategory";
			require_once(MODEL."ProcessPost.php");
			$this->model = new ProcessPost();

			$category_id = $this->model->getCategoryId($category_link);
			$category = $this->model->getCategory($category_id);
			$data = $this->model->getPostofCategory($category_id);
			//Render to home 
			$this->view->header();
			$this->view->render('home/welcome.php',$this->initData);
			$this->view->render('home/category.php',$data,$category);
			$this->view->footer();
		}
	}
?>



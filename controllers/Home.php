<?php 

	/**
	* 
	*/
	class Home extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){

			require_once(MODEL."ProcessPost.php");
			$this->model = new ProcessPost();
			$data1 = $this->model->getAllPost();

			$this->view->header();
			$this->view->render("home/welcome.php",$this->initData);
			$this->view->render("home/index.php",$data1);
			$this->view->footer();

			
		}
	}
?>
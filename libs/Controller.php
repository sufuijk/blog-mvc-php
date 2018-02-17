<?php 

	/**
	* 
	*/
	class Controller 
	{
		protected $model;
		protected $view;
		protected $initData;
		function __construct()
		{
			$this->model = new Model();
			$this->view = new View();	
			$this->initData = $this->model->getAllCategories();

		}
	}
?>
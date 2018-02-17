<?php

	/**
	* 
	*/
	class View 
	{
		
		function __construct()
		{	

		}
		public function header(){
			require_once(VIEW.'template/header.php');	
		}
		public function footer(){
			require_once(VIEW.'template/footer.php');	
		}
		public function render($url,$data=null,$data1=null){
			require_once(VIEW.$url);
		}
		public function headerAdmin(){
			require_once(VIEW.'admin/header-admin.php');
		}
		public function footerAdmin(){
			require_once(VIEW.'admin/footer-admin.php');
		}		
	}
?>
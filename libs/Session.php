<?php 

	/**
	* 
	*/
	class Session
	{
	
		

		function __construct()
		{
			session_start();
		}

		public function setName($username){
			$_SESSION["username"] = $username;
		}

		public function setId($id){
			$_SESSION["id"] = $id;			
		}

		public function clear(){
			session_destroy();
		}
	}
?>
<?php 

	/**
	* 
	*/
	class ProcessAccount extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getInfo($username,$password){
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			if($this->checkAccount($username,$password) == 1){
				$result = $this->select($sql); 
				$_SESSION['username']  = $result[0]->username;
				$_SESSION['id'] = $result[0 ]->id;
			}
			header("Location: index.php?c=admin");
		}

		public function checkAccount($username,$password){
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = $this->connect->query($sql);

			if($result->num_rows > 0){
				return 1;
			}
			return 0;
		}
	}
?>
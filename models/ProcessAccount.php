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
			$sql = "SELECT id,username,phanquyen,gender,email,lastname,firstname,image FROM users WHERE username = '$username' AND password = '$password'";
			if($this->checkAccount($username,$password) == 1){
				$result = $this->select($sql); 
				$_SESSION['user'] = $result[0];
			}
			header("Location: index.php?c=admin");
		}

		
		public function getAllUser(){
			$sql = "SELECT * FROM users";
			return $this->select($sql);
		}
		public function getUser($userID){
			$sql = "SELECT * FROM users WHERE id='$userID'";
			return $this->select($sql)[0];
		}
		public function checkAccount($username,$password){
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = $this->connect->query($sql);

			if($result->num_rows > 0){
				return 1;
			}
			return 0;
		}

		public function changePass($userID,$repassword){
			$sql = "UPDATE users SET password = '$repassword' WHERE id='$userID'";
			$this->update($sql);
		}
		public function insertUser($firstname,$lastname,$gender,$email,$username,$password,$phanquyen){
			$sql = "INSERT INTO users(firstname,lastname,gender,email,username,password,phanquyen)
			VALUES ('$firstname','$lastname','$gender','$email','$username','$password','$phanquyen')";
			$this->insert($sql);
		}
		public function updateUser($userID,$firstname,$lastname,$gender,$email){
			$sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',gender='$gender',email='$email' WHERE id = '$userID'";
			$this->update($sql);
		}
		public function updateImage($image,$userID){
			$sql = "UPDATE users SET image='$image' WHERE id='$userID'";
			$this->update($sql);
		}
	}
?>
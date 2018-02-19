<?php

	/**
	* 
	*/
	class Model 
	{
		private $hostname = "localhost";
		private $username = "root";
		private $password = "";
		private $database = "blog";
		
		protected $connect;
		function __construct()
		{	
			$this->connect = new mysqli($this->hostname,$this->username,$this->password,$this->database) or die("Can't connect database!");
		}

		public function select($sql){
			$result = $this->connect->query($sql);
			$dataset = array();
			if($result->num_rows > 0){
				while($row = $result->fetch_object()){
					$dataset[] = $row;
				}
			}
			return $dataset;
		}
		public function insert($sql){
			return $this->connect->query($sql);
		}
		public function getAllCategories(){
			$sql = "SELECT * FROM categories";
			return $this->select($sql);
		}
	}
?>
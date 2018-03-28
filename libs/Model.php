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
		public function update($sql){
			return $this->connect->query($sql);
		}

		public function delete($sql){
			return $this->connect->query($sql);
		}
		public function getAllCategories(){
			$sql = "SELECT * FROM categories";
			return $this->select($sql);
		}

		public function getAllUser(){
			$sql = "SELECT id,username FROM users";
			return $this->select($sql);
		}

		public function makeTitleLink ($str){

			$unicode = array(
				'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
				'd'=>'đ',
				'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'i'=>'í|ì|ỉ|ĩ|ị',
				'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
				'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
				'D'=>'Đ',
				'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
				'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
				'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
				'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
				'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
			);

			foreach($unicode as $nonUnicode=>$uni){
				$str = preg_replace("/($uni)/i", $nonUnicode, $str);
			}
			$str = str_replace(' ','-',$str);
			return $str;
		}

		public function makeReadmore($content,$id,$link){

			$chars = 350;  
			$content = substr($content,0,$chars);  
			$content = substr($content,0,strrpos($content,' '));
			$content = "<b>".$content."</b>";
			$content = $content."...<br><a href='?c=post&a=view&id=$id&link=$link'>&#9658;Read More</a>"; 	  
			return $content;  


		}
	}
	?>
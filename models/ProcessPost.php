<?php 

	/**
	* 
	*/
	class ProcessPost extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getAllPost(){
			$sql = "SELECT * FROM posts";
			return $this->select($sql);
		}

		public function getPost($post_id){
			$sql = "SELECT * FROM posts WHERE id = '$post_id'";
			$result = $this->select($sql);
			return $result[0];
		}
		public function getPostofCategory($category_id){
			$sql = "SELECT * FROM posts WHERE category_id = '$category_id'";
			return $this->select($sql);
		}
		public function getCategory($category_id){
			$sql = "SELECT * FROM categories WHERE id = '$category_id'";
			return $this->select($sql);
		}
		public function getCategoryId($category_link){
			$sql = "SELECT * FROM categories WHERE url = '$category_link'";
			$result = $this->select($sql);
			return $result[0]->id;
		}

		public function getCategoryTitle($category_id){
			$sql = "SELECT * FROM categories WHERE id = '$category_id'";
			$result = $this->select($sql);
			return $result[0]->title;
		}
	}

?>
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

		public function insertPost($title,$content,$userid,$category_id,$timedate,$url){
			$sql = "INSERT INTO posts(title,content,userid,category_id,timedate,url)
			 VALUES('$title','$content','$userid','$category_id','$timedate','$url')";
			return $this->insert($sql);
		}

		public function updatePost($post_id,$title,$content,$userid,$category_id,$url){
			$sql = "UPDATE  posts SET title='$title', content='$content', category_id='$category_id' 
			WHERE id='$post_id' AND userid='$userid' ";
			return $this->update($sql);
		}
		public function deletePost($id){
			$sql = "DELETE FROM posts WHERE id='$id'";
			return $this->delete($sql);
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

		public function insertCategory($title,$url,$description = null){
			$sql = "INSERT INTO categories(title,url,description) VALUES ('$title','$url','$description')";
			return $this->insert($sql);

		}
	}

?>
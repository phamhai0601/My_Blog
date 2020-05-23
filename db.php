<?php
	/**
	 * 
	 */
	class Database
	{
		
		function __construct()
		{
			$this->link = mysqli_connect("localhost","root","mysql","my_blog") or die ("conect false");
            mysqli_set_charset($this->link,"utf8");			
		}
		public function query($quey){
			{
				return mysqli_query($this->link,$quey);
			}
		}
		public function getRecentPosts($this_page_first_result,$results_per_page){
			$sql = "SELECT title,html,isLink,link,category_id,date,name FROM blog,category WHERE blog.category_id = category.id ORDER BY date DESC LIMIT ".$this_page_first_result.",".$results_per_page;
			$result = mysqli_query($this->link,$sql)or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
			if($result){
				while($num = mysqli_fetch_assoc($result)){
					$data[] = $num;
				}				
			}
			return $data;		
		}
        public function getRecentPostsSearch($this_page_first_result,$results_per_page,$key){
            $sql = "SELECT title,html,isLink,link,category_id,date,name FROM blog,category WHERE blog.category_id = category.id and `title` LIKE '%".$key."%' ORDER BY date DESC LIMIT ".$this_page_first_result.",".$results_per_page;
            $result = mysqli_query($this->link,$sql)or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
            if($result){
                while($num = mysqli_fetch_assoc($result)){
                    $data[] = $num;
                }
            }
            return $data;
        }
		public function getRecentPostsCategory($category_id,$this_page_first_result,$results_per_page)
		{
			$sql = "SELECT title,html,isLink,link,category_id,date,name FROM blog,category WHERE blog.category_id = category.id and blog.category_id =".$category_id." ORDER BY date DESC LIMIT ".$this_page_first_result.",".$results_per_page;
			$result = mysqli_query($this->link,$sql)or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
			if($result){
				while($num = mysqli_fetch_assoc($result)){
					$data[] = $num;
				}				
			}
			return $data;		
		}

		public function getViewOne($id){
			$sql = "SELECT * FROM `blog` WHERE `id` = ".$id;
			$result = mysqli_query($this->link,$sql);
			if($result){
				$num = mysqli_fetch_assoc($result);
			}
			return $num;
		}

		public function addBlogConten($title,$content,$isLink,$link,$category_id){
			$sql	= "INSERT INTO `my_blog`.`blog` (`id`, `title`, `html`, `isLink`, `link`, `category_id`, `date`) VALUES (NULL, '".$title."', '".$content."', '".$isLink."','".$link."','".$category_id."', '".time()."');";
			mysqli_query($this->link,$sql);
			return mysqli_insert_id($this->link);
		}

		public function getCategory(){
            $sql = "SELECT * FROM `category`";
            $result = mysqli_query($this->link,$sql)or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));
            if($result){
                while($num = mysqli_fetch_assoc($result)){
                    $data[] = $num;
                }
            }
            return $data;
        }
	}

?>
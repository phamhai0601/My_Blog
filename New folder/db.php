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
		function get_title($id){

			$sql = "select * from blog where id='$id'";

			$q = mysqli_query($this->link,$sql)or die("Lỗi Truy Vấn fetchAll " .mysqli_error($this->link));;

			while($data = mysqli_fetch_array($q)){
				return $data['title'];
			}
		}

		function get_html($id){

			$sql = "select * from blog where id='$id'";

			$q = mysqli_query($this->link,$sql);

			while($data = mysqli_fetch_array($q)){

				return $data['html'];

			}

		}
		
		function create_blog($title,$html){

			$date = date('d.m.Y');

			$html = mysqli_real_escape_string($html);

			$sql = "INSERT INTO blog (title, html, date) VALUES ('$title','$html','$date');";

			$q = mysql_query($sql);

			if($q) return true;

			else return false;

			echo mysqlI_error();

			mysqlI_close();

		}

		function get_title_id($title){

			$sql = "select * from blog where title='".$title."'";

			$q = mysqli_query($sql);

			while($ks = mysqli_fetch_array($q)){

				return $ks['id'];

			}
		}

		function edit_blog($title,$html,$id){

			$date = date('d.m.Y');

			$html = mysqli_real_escape_string($html);

			$sql = "UPDATE blog SET title = '$title', html = '$html', date = '$date' WHERE id = '$id'";

			$q = mysqli_query($sql);

			if($q) return true;

			else return false;

		}

function delete_blog($id){

	$sql= "delete from blog where id='$id'";

	$q = mysqli_query($sql);

	if($q) return true;

	else return false;


}



	function menu(){

		$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 0 , 8 ";

		$q = mysqli_query($this->link,$sql);

		while($data = mysqli_fetch_array($q)){

			echo '<a id="left_menu" href="?id='.$data['id'].'"> '.$data['title'].'</a><br>';

		}


	}



	function blog_list(){

		$sql = "select * from blog";

		$q = mysqli_query($sql);

		echo '<form method="post"><select name="id">';

		while($data = mysqli_fetch_array($q)){

			echo '<option value="'.$data['id'].'"=""> '.$data['title'].'</option>';

		}

		echo '</select><br><input value="submit" type="submit"></form>';

	}



	function check_id($id){

		$sql = "select * from blog where id='$id'";

		$q = mysqli_query($sql);

		if(mysqli_num_rows($q)>0) return true;

		else return false;

	}				

	}

?>

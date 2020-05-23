<?php
            if(isset($category_id) && $category_id > 0){
                $sql_pagination = "SELECT * FROM `blog` WHERE category_id =".$category_id;
            }else{
                $sql_pagination = "select * FROM blog";
            }
            $result_pagination = $db->query($sql_pagination);
			if (!isset($_GET['page'])) {
			  $page = 1;
			} else {
			  $page = $_GET['page'];
			}
			$number_of_results = $result_pagination->num_rows;
			$results_per_page = 5;
			$number_of_pages = ceil($number_of_results/$results_per_page);
			$this_page_first_result = ($page-1)*$results_per_page;
?>
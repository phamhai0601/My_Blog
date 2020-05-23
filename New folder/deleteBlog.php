<?php

require('functions.php');

if(isset($_POST['id'])){

delete_blog($_POST['id']);

}

blog_list();

?>
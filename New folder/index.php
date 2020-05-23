<?php
//include 'functions.php';

require('db.php');
$db = new Database();


if(isset($_GET['id'])){

$id = $_GET['id'];

if(check_id($id)){

define('ks_title',get_title($id));

define('ks_content',get_html($id));

}

else {

define('ks_title','404 - PAGE NOT FOUNDED');

define('ks_content','404 page not found<br>  please try after some days ! <br> -thanks');

}

}

else {

define('ks_title',$db->get_title(1));

define('ks_content',$db->get_html(1));

}

include 'thems.php';

?>
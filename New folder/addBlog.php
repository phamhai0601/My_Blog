<?php

require('functions.php');

if($_SERVER['REQUEST_METHOD']== "POST"){

if(create_blog($_POST['title'],$_POST['html'])){

echo '<font color="lightgreen>">your blog '.$_POST['title'].' had been created </font>

url: index.php?id='. get_title_id($_POST['title']);

}

else echo '<font color="red"> Some problem please check your database connection <font>';

}

html_form();

?>

</font></font>
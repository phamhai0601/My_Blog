<?php

require('functions.php');

if(isset($_POST['html'])){

if(edit_blog($_POST['title'],$_POST['html'],$_POST['id'])){

echo '<font color="lightgreen>">your blog '.$_POST['title'].' had been edited </font>';

}

else echo '<font color="red"> Some problem please check your database connection <font>';

}

if(isset($_POST['id'])){

html_form(get_title($_POST['id']),get_html($_POST['id']),$_POST['id']);

}

else blog_list();

?>

</font></font>
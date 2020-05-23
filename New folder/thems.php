<?php
	include 'functions.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<link rel="stylesheet" href="style.css" type="text/css">

<title> <?php echo ks_title;?> KAMESHsoft</title>

</head>

<body>

<table>

<tbody>

<tr>

<td id="top-menu">KAMESHsoft BLOGGER (www.ksoft.isgreat.org)</td>

</tr>

</tbody>

</table>



<table id="menu">

<tbody>

<tr>

<td ><div><?php $db->menu(); ?></div></td>

</tr>

</tbody>

</table>



<table id="content">

<tbody>

<tr>

<td ><?php echo ks_content;?></td>

</tr>

</tbody>

</table>

</body>

</html>
<?php


if(isset($_POST['remove_user']))
{
	$user = $_POST['user'];
	
	$dbx = "DELETE FROM users WHERE id = '$user' ";
	$extractx = mysql_query ($dbx);
	
	$remove = 1;
}

?>
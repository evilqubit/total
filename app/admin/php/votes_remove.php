<?php


if(isset($_POST['remove_vote']))
{
	$user = $_POST['user'];
	
	$dbs = "DELETE FROM participants WHERE id = '$user' ";
	$extractx = mysql_query ($dbs);
	
	$remove = 1;
}

?>
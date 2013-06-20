<?php

if (isset($_POST['disapprove']))
{
	$update = mysql_query ("UPDATE participants SET status = '2' WHERE id= '$user'");
	$done = 2;	
}

?>
<?php

if (isset($_POST['approve']))
{
	$update = mysql_query ("UPDATE participants SET status = '1' WHERE id= '$user'");
	$done = 1;
}

?>
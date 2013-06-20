<?php
include "../includes/connect.php";

$username = $_GET['username'];
$password = md5($_GET['password']);
$newpassword = md5($_GET['newpassword']);
$repassword = md5($_GET['repassword']);

$db = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$extractx = mysql_query ($db);
$numrowsx = mysql_num_rows ($extractx);

if($numrowsx != 0)
{
	while ($row = mysql_fetch_array($extractx))
	{
		if($newpassword == $repassword)
		{
			$id = $row['id'];
			$db = "UPDATE admin SET password = '$newpassword' WHERE id= '$id'";
			$update = mysql_query ($db);
			echo '<h4 class="alert_success" style="display:block">Username Changed Successfully</h4>';
		}
		else
		{
			echo '<h4 class="alert_error" style="display:block">The Two New Passwords Does Not Match</h4>';
		}
	}
}
else
{
	echo '<h4 class="alert_error" style="display:block">Wrong Username or Password</h4>';
}

?>
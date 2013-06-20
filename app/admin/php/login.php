<?php
if(isset($_POST['login_admin']))
{
	$redirect = '<script>window.location = "home.php";</script>';
	
	$myusername = $_POST['myusername'];
	$mypassword = md5($_POST['mypassword']);
	
	
	$db = "SELECT * FROM admin WHERE username = '$myusername' AND password = '$mypassword'";
	$extractx = mysql_query ($db);
	$numrowsx = mysql_num_rows ($extractx);
	
	if($numrowsx != 0){
		$_SESSION['after_username'] = $myusername;
		$_SESSION['after_password'] = $mypassword;
		echo $redirect;}
	else{
		$error = '1';}
}

?>

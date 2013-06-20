<?php

session_start();
include "connect.php";

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

if (curPageName() != 'index.php')
{ 
	$redirect = '<script>window.location = "index.php";</script>';
	
	$db = "SELECT * FROM admin WHERE username = '{$_SESSION['after_username']}' AND password = '{$_SESSION['after_password']}'";
	$extractx = mysql_query ($db);
	$numrowsx = mysql_num_rows ($extractx);
	
	if ($numrowsx == 0)
	{
		echo $redirect;
		exit;
	}
}

$myapp = "https://www.facebook.com/pages/Publiscreen-Apps/581669711863250?id=581669711863250&sk=app_281325538680004";
$error = '';
$success = '';
?>




<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Total</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->



<link rel="stylesheet" href="../fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="../scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox.pack.js?v=2.0.6"></script>
<link rel="stylesheet" href="../fancybox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="../fancybox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>



	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>



<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code

function changeusername(){

var username = $('#username').val();
var newusername = $('#newusername').val();
var password = $('#password').val();

	$.get('php/adminname.php?username='+ username +'&newusername='+ newusername +'&password='+ password, function(data) {
		$('#result').html(data);
	});
	
}

function changepassword(){

var username = $('#username2').val();
var password = $('#password2').val();
var newpassword = $('#newpassword').val();
var repassword = $('#repassword').val();

	$.get('php/adminpass.php?username='+ username +'&password='+ password +'&newpassword='+newpassword+'&repassword='+repassword, function(data) {
		$('#result2').html(data);
	});
}
//-->
</script>

<script>
$(document).ready(function() {
		$(".fancybox").fancybox({
			
		});
	});
</script>
</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="home.php">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a target="_blank" href="<?php echo $myapp;?>">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="home.php">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		
		<hr/>

        <h3>Users</h3>
		<ul class="toggle">
			<li class="icn_view_users"><a href="users.php">Facebook Users</a></li>
		</ul>
        <h3>Voting</h3>
		<ul class="toggle">
            <li class="icn_photo"><a href="new.php">New</a></li>
            <li class="icn_photo"><a href="approved.php">Approved</a></li>
            <li class="icn_photo"><a href="disapproved.php">Disapproved</a></li>
		</ul>		
		<h3>Admin</h3>
		<ul class="toggle">
			<li class="icn_security"><a href="admin.php">Security</a></li>
			<li class="icn_jump_back"><a href="php/logout.php">Logout</a></li>
		</ul>
		
		
	</aside><!-- end of sidebar -->
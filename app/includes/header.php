<?php 
session_start();

include "demo.php";
if ( ($deviceType == 'tablet') || ($deviceType == 'phone') )
{
	/*echo '<script>top.location.href = "http://lebappsonline.com/dev01/total/mobile/";</script>';*/
}

//include "include.php";
?>
<?php


include_once('ip2country.php');
$ip2c=new ip2country();
$ip2c->mysql_host='localhost';
$ip2c->db_user='yasserc_total';
$ip2c->db_pass='a123456789b';
$ip2c->db_name='yasserc_total';
$ip2c->table_name='ip2c';

$_SESSION['country'] = $ip2c->get_country_name();
//$ip2c->get_country_code();


include "connect.php";

$_SESSION['uid'] = '111';
?>

<html>
<head>
<title>Total</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script src="js/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" />


<script src="scripts/jquery.bxslider.js"></script>
<link rel="stylesheet" href="scripts/jquery.bxslider.css" type="text/css" />




<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.0.6"></script>
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>



</head>


<body>
<div id="Gaia">
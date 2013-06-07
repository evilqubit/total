<?php include "connect.php";?>
<?php

session_start();
include_once('ip2country.php');
$ip2c=new ip2country();
$ip2c->mysql_host='localhost';
$ip2c->db_user='yasserc_afterear';
$ip2c->db_pass='a123456789b';
$ip2c->db_name='yasserc_afterearth';
$ip2c->table_name='ip2c';

$_SESSION['country'] = $ip2c->get_country_name();
//$ip2c->get_country_code();

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
</head>


<body>
<div id="Gaia">
<?php 
session_start();

include "demo.php";
if ($deviceType == 'computer')
{
	/*echo '<script>top.location.href = "https://www.facebook.com/pages/Publiscreen-Apps/581669711863250?id=581669711863250&sk=app_281325538680004";</script>';*/
}
 
include "include.php";
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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Total</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<?php
ob_start();

session_start();

unset($_SESSION['after_username']);
unset($_SESSION['after_password']);
$_SESSION = array();
session_destroy();

header ("Location:../index.php");

ob_end_flush();
?>

<?php
session_start();
include "../includes/connect.php";

$_SESSION['limit'] += 5;

		if (!isset($_GET["sort"]) || empty($_GET["sort"]))
		{
			$sortmethod = 0;
		} 
		else {
			$sortmethod = $_GET["sort"];
		}
		if($sortmethod == 1)
		{
			$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['limit']}, 5";
		}
		else
		{
			if ($sortmethod == 2)
			{
				$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC LIMIT {$_SESSION['limit']}, 5";
			}
			else
			{
				$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC LIMIT {$_SESSION['limit']}, 5";
			}
		}
		
		
		
		$query_result = mysql_query($selectQuery);
		while ($row = mysql_fetch_array($query_result))
		{
			include "gallery_table.php";
		}
			
?>
<?php

if(isset($_GET['partid']) && ($_GET['partid'] != ''))
{
	$partid = $_GET['partid'];

	$selectQuery = "SELECT * FROM votes WHERE user_id = '{$_SESSION['uid']}'";
	$query_result = mysql_query($selectQuery);
	$numrows = mysql_num_rows($query_result);
	
	if($numrows == 0)
	{
		$date = date("Y-m-d H:m:s", strtotime("+3 hours"));
		
		$write = mysql_query("INSERT INTO votes VALUES ('','$partid','{$_SESSION['uid']}','$date')");
		
		$selectQuery = "SELECT * FROM participants WHERE id = '$partid'";
		$query_result = mysql_query($selectQuery);
		$row = mysql_fetch_array($query_result);

			$votes = $row['votes'];
			$votes += 1;
			
			$db ="UPDATE participants SET votes = '$votes' WHERE id= '$partid'";
			$update = mysql_query ($db);
		
		echo '<script>document.location.replace("after_vote.php?v=1");</script>';
	}
	else
	{
		$date = date("Y-m-d H:m:s", strtotime("+3 hours"));
		
		while ($row = mysql_fetch_array($query_result))
		{
			$past = $row['date'];
		}
		
		$diff = abs(strtotime($date) - strtotime($past)); 
	
		$years   = floor($diff / (365*60*60*24)); 
		$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
		$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		
		$hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60)); 
	
		$minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60); 
		
		$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));
		
		if($days == 0)
		{
			echo '<script>document.location.replace("after_vote.php?v=0");</script>';
		}
		else
		{
			$selectQuery = "SELECT * FROM participants WHERE id = '$partid'";
			$query_result = mysql_query($selectQuery);
			$row = mysql_fetch_array($query_result);

				$votes = $row['votes'];
				$votes += 1;
			
			$db ="UPDATE participants SET votes = '$votes' WHERE id= '$partid'";
			$update = mysql_query ($db);
			
			$write = mysql_query("INSERT INTO votes VALUES ('','$partid','{$_SESSION['uid']}','$date')");
			
			echo '<script>document.location.replace("after_vote.php?v=1");</script>';
		}
		
	}
	
}

?>
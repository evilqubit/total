<?php

if( (isset($_GET['gallery_image'])) && ($_GET['gallery_image'] != ''))
{
	
	$gallery_image = $_GET['gallery_image'];

	$selectQuery = "SELECT * FROM votes WHERE user_id = '{$_SESSION['uid']}' ORDER BY date DESC LIMIT 1";
	$query_result = mysql_query($selectQuery);
	$numrows = mysql_num_rows($query_result);
	
	if($numrows == 0)
	{
		$date = date("Y-m-d H:m:s", strtotime("+9 hours"));
		
		$write = mysql_query("INSERT INTO votes VALUES ('','$gallery_image','{$_SESSION['uid']}','$date')");
		
		$selectQuery = "SELECT * FROM participants WHERE id = '$gallery_image'";
		$query_result = mysql_query($selectQuery);
		$row = mysql_fetch_array($query_result);

			$votes = $row['votes'];
			$votes += 1;
			
			$image = 'http://lebappsonline.com/dev01/total/app/gallery/t/' . $row['image'];
			
			$db ="UPDATE participants SET votes = '$votes' WHERE id= '$gallery_image'";
			$update = mysql_query ($db);
		
		$facebook->api("/me/feed", "post", array(
			message => 'I Just voted for this image',
			picture=>  $image,
			link => $config['appbaseurl'],
			name => "Total"
			));
			
		echo '<script>document.location.replace("after_vote.php?v=1");</script>';
	}
	else
	{
		$date = date("Y-m-d H:m:s", strtotime("+9 hours"));
		
		$row = mysql_fetch_array($query_result);
		$past = $row['date'];
			
		
		
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
			$selectQuery = "SELECT * FROM participants WHERE id = '$gallery_image'";
			$query_result = mysql_query($selectQuery);
			$row = mysql_fetch_array($query_result);

				$votes = $row['votes'];
				$votes += 1;
				
				$image = 'http://lebappsonline.com/dev01/total/app/gallery/t/' . $row['image'];
				
			$db ="UPDATE participants SET votes = '$votes' WHERE id= '$gallery_image'";
			$update = mysql_query ($db);
			
			$write = mysql_query("INSERT INTO votes VALUES ('','$gallery_image','{$_SESSION['uid']}','$date')");
			
			
			$facebook->api("/me/feed", "post", array(
			message => 'I Just voted for this image',
			picture=>  $image,
			link => $config['appbaseurl'],
			name => "Total"
			));
			
			
			echo '<script>document.location.replace("after_vote.php?v=1");</script>';
			
		}
		
	}
	
}

?>
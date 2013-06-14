<?php

$error = '';
$name = '';
$age = '';
$email = '';
$address =' ';
$phone = '';
	
	
if(isset($_POST['submit_poll']))
{
	$name = addslashes($_POST['name']);
	$age = addslashes($_POST['age']);
	$email = addslashes($_POST['email']);
	$address = addslashes($_POST['address']);
	$phone = addslashes($_POST['phone']);
	
	$date = date("Y-m-d H:m:s", strtotime("+9 hours"));
	
	$target_paths = "gallery/";
	$target_path_t = "gallery/t/";
	


if(($_FILES['image']['type'] == 'image/jpeg')
|| ($_FILES['image']['type'] == 'image/pjpeg')
|| ($_FILES['image']['type'] == 'image/png')
|| ($_FILES['image']['type'] == 'image/gif'))
{
	$maxSize = 1000000; 
	$uploadSize = $_FILES['image']['size'];

	$type = basename( $_FILES['image']['name']);
	$one = substr($type, -3);
	$dates = date('YmdHis',strtotime('+2 hour'));
	$target_path = $target_paths .$dates .'.' . $one;
	$target_path_t = $target_path_t .$dates .'.' . $one;
	
	if ($uploadSize <= $maxSize)
	
	{
		if (basename($_FILES['image']['name']) != '')
		{
			
				$image = $dates .'.' . $one;
							
				if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) 
				{
					include "thumb.php";
					
					$write = mysql_query("INSERT INTO participants VALUES ('','$uid','$name','$age','$email','$address','{$_SESSION['country']}','$phone','$image','$date','0','0')");
					
					$image = $config['baseurl'] .'gallery/t/' . $image;
					
					$facebook->api("/me/feed", "post", array(
					message => 'I Just voted for this image',
					picture=>  $image,
					link => $config['appbaseurl'],
					name => "Total"
					));
			
					echo "<script>document.location.replace('thankyou.php');</script>";
					
				exit;
				} 
				else
				{
					$error = 'error while uploading, please try again!';
				}
		}
		else
		{
			$error = 'Please upload your image';
		}
	}
	else
	{
		$error = 'image should not exceed 1 MB';
	}
	}
	
	else
	{
		$error = 'Image type can be only jpg, png or gif';
	}
}
?>
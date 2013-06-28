<?php
	
if(isset($_POST['submit_poll']))
{
	$name = addslashes($_POST['name']);
	$age = '';
	$email = addslashes($_POST['email']);
	$address = addslashes($_POST['address']);
	$phone = addslashes($_POST['phone']);
	
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	
	$date = date("Y-m-d H:m:s", strtotime("+9 hours"));
	
	$target_paths = "../app/gallery/";
	$target_path_t = "../app/gallery/t/";
	

if(($_FILES['image']['type'] == 'image/jpeg')
|| ($_FILES['image']['type'] == 'image/pjpeg')
|| ($_FILES['image']['type'] == 'image/png')
|| ($_FILES['image']['type'] == 'image/gif'))
{
	$maxSize = 10000000; 
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
					
					$write = mysql_query("INSERT INTO participants VALUES ('','$uid','$name','$age','$email','$address','{$_SESSION['country']}','$phone','$image','$date','1','0','$latitude','$longitude')");
					
					$image = 'http://lebappsonline.com/dev01/total/app/gallery/t/' . $image;
					
					$facebook->api("/me/feed", "post", array(
					message => 'I submitted this image, please vote',
					picture=>  $image,
					link => $config['appbaseurl'],
					name => "Total"
					));
			
					echo "<script>document.location.replace('thankyou.php');</script>";
					
				exit;
				} 
				else
				{
					echo "<script>alert('error while uploading, please try again!');</script>";
				}
		}
		else
		{
			echo "<script>alert('Please upload your image');</script>";
		}
	}
	else
	{
		echo "<script>alert('image should not exceed 10 MB');</script>";
	}
	}
	
	else
	{
		echo "<script>alert('Image type can be only jpg, png or gif');</script>";
	}
}
?>
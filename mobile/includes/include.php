<?php
require_once "facebook.php";
 
$app_id = "281325538680004";
$app_secret = "e44dd0d121e9b54bd51bf85b2fc02fd2";
$config['appbaseurl'] = "http://lebappsonline.com/dev01/total/app/";

// Init facebook api.
$facebook = new Facebook(array(
        'appId' => $app_id,
        'secret' => $app_secret,
        'cookie' => true
));

$user = $facebook->getUser();

$uid = $user;

 
// Get the url to redirect for login to facebook
// and request permission to write on the user's wall.
$login_url = $facebook->getLoginUrl(
    array('scope' => 'email,user_birthday,publish_stream,status_update,user_work_history,publish_actions,read_stream, publish_stream, offline_access,user_likes
	')
);
 
// If not authenticated, redirect to the facebook login dialog.
// The $login_url will take care of redirecting back to us
// after successful login.
if (! $facebook->getUser()) {
    echo <<< EOT
	
<script type="text/javascript">
top.location.href = "$login_url";
</script>;

EOT;
 
    exit;
}
 
 $count = 0;	
	
	
	
	if(!$user)
		{
			try
			{
				$userInfo = $facebook->api('/me');
		
				if(isset($userInfo['id']))
					$user = $userInfo['id'];
			}
				catch (FacebookApiException $e) 
				{       
					$user = null;
				}
		}
		
    if ($user) 
	{
      try 
	  {
	  
      	$params['access_token']=$facebook->getAccessToken();
		
				if(!$userInfo)
					$userInfo = $facebook->api('/'.$user);        
		
      } 
	  catch (FacebookApiException $e) 
	  {  
			$user = null;
      }
    }

    if (!$user) {
        echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
        exit;
    }
   
    $userInfo = $facebook->api("/".$user);
    
    $userLikes = $facebook->api("/".$user."/likes");

    function d($d){
        echo '<pre>';
        print_r($d);
        echo '</pre>';
    }

	$_SESSION['uid'] = $user;
    
    $like_size = sizeof ($userLikes['data']);
    $_SESSION['found'] = 0;
    for ($i = 0; $i <= $like_size; $i++)
    {
    	if($userLikes['data'][$i]['id'] == '581669711863250')
        {
        	$_SESSION['found'] = 1;
        }
    }
    
    if($_SESSION['found'] == 0)
    {
    	echo "<script>window.location = 'like.php'; </script>";
        exit;
    }
?>
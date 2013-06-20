<?php include "includes/header.php"; ?>



<?php
$dbs = "SELECT * FROM users WHERE fb_id = '{$_SESSION['uid']}'";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);

if($numrows == 0)
{
	$date = date("Y-m-d");
	$write = mysql_query("INSERT INTO users VALUES ('','{$_SESSION['uid']}','$uname','$uemail','$dob','$date')");
}

$dbs = "SELECT * FROM participants WHERE fb_id = '{$_SESSION['uid']}'";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);

if($numrows > 0)
{
	echo "<script>document.location.replace('vote.php');</script>";
}
?>
<?php include "php/submit.php";?>
<div id="index">

 		<div id="terms" class="lightbox" style="display:none">
        	
            <div id="terms_back">
            
        	<div id="content_1" class="content">
        	<?php include "php/terms.php";?>
            </div>
            </div>
        </div>
        
        
        
        <div id="prizes" class="lightbox">
        	
          
            <table align="center" style="width:810px; height:600px;"><Tr><Td align="center">
            <img style="height:600px" src="images/prize.png" />
        	</Td></Tr></table>
            
        </div>
        
        <input id="error" readonly value="<?php echo $error;?>">
    <form method="post" id="forming" name="forming" action="index.php" enctype="multipart/form-data">
	<div id="form">
    	<div>Full Name</div>
        <div><input type="text" value="<?php echo $name;?>" name="name" id="name"/></div>
        <div class="clearboth"></div>
        
        <div>AGE</div>
        <div><input type="text" value="<?php echo $age;?>" name="age"/ id="age"></div>
        <div class="clearboth"></div>
        
        <div>EMAIL</div>
        <div><input type="text" value="<?php echo $email;?>" name="email" id="email"/></div>
        <div class="clearboth"></div>
        
        <div>ADDRESS</div>
        <div><input type="text" value="<?php echo $address;?>" name="address" id="address"/></div>
        <div class="clearboth"></div>
        
        <div>PHONE NUMBER</div>
        <div>
        <input type="hidden" value="" id="latitude" name="latitude"/>
        <input type="hidden" value="" id="longitude" name="longitude"/>
        
        <input type="text" value="<?php echo $phone;?>" name="phone" id="phone"/></div>
        <div class="clearboth"></div>
        
        <div>UPLOAD PHOTO</div>
        <div style="overflow:hidden"><div id="upload_image"></div>
        	<input id="image" type="file" value="" name="image"/>
            <div id="choose_image"><img src="images/choose_file.png" /></div><span id="file_chosen">No file chosen</span>
            
        </div>
        <div class="clearboth"></div>
        
        
        <div style="height:30px">
            <div>
            <input type="submit" value="" id="submit" name="submit_poll"/></div>
        </div>
        
    </div>
	</form>

	<div id="bottom_menu">
    	<div id="b_prizes"><img src="images/prizes.png" /></div>
        <div style="float:left;height:100%; width:2px;"></div>
        <div id="b_vote"><img onClick="vote()" src="images/vote.png" /></div>
        <div style="float:left;height:100%; width:2px;"></div>
        <div id="b_tc"><img src="images/tc.png" /></div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
<!-- custom scrollbars plugin -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>



<script type="text/javascript">

$(window).ready(function(e) {
    if (navigator.geolocation)
    {
   		navigator.geolocation.watchPosition(showPosition);
    }
  	else{}
	
	
});


function showPosition(position)
{
	$("#latitude").val(position.coords.latitude);
	$("#longitude").val(position.coords.longitude);
}
  
  
$('#image').change(function(){
	$('#file_chosen').text($(this).val());
});


function vote()
{
	document.location.replace("vote.php");
}

$('#image').change(function(){
	$('#file_chosen').text();
});

$('.lightbox').click(function(){
	$('#terms').css({
		"display":"none"
		});
		
	$('#prizes').css({
		"display":"none"
		});
});

$('#b_tc').click(function(){
	$('#terms').css({
		"display":"block"
		});
		
		$("#content_1").mCustomScrollbar({
				autoHideScrollbar:true,
				theme:"light-thin"
			});
});

$('#b_prizes').click(function(){
	$('#prizes').css({
		"display":"block"
		});
});

$("#submit").click(function(){
	
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		$("#error").val("Please enter your name");
		$("#name").focus();
		return false;
	}
	
	/*if( $("#age").val() == '')
	{
		$("#error").val("Please enter your age");
		$("#age").focus();
		return false;
	}*/
	
	if( $("#email").val() == '')
	{
		$("#error").val("Please enter your email");
		$("#email").focus();
		return false;
	}
	
	 if ($("#email").val().search(emailRegEx) == -1) {
          $("#error").val("Please enter valid email address");
		$("#email").focus();
		return false;
     }
  
	if( $("#address").val() == '')
	{
		$("#error").val("Please enter your address");
		$("#address").focus();
		return false;
	}
	
	/*if( $("#phone").val() == '')
	{
		$("#error").val("Please enter your phone number");
		$("#phone").focus();
		return false;
	}*/
	
	if( $("#image").val() == '')
	{
		$("#error").val("Please upload your image");
		$("#phone").focus();
		return false;
	}
});
   </script>
   

<?php include "includes/footer.php";?>
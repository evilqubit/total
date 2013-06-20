<?php include "includes/header.php"; ?>
    <!-- Le styles -->
    
    
    <link href="assets/css/bootstrap-fileupload.css" rel="stylesheet">
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet">
    
    <link href="assets/css/bootstrap-lightbox.css" rel="stylesheet">
    <link href="assets/css/bootstrap-lightbox.min.css" rel="stylesheet">
    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-10']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

<style>
@font-face {
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	src: url('fonts/HelveticaNeueLTStd-Bd.eot');
	src: local('☺'), url('fonts/HelveticaNeueLTStd-Bd.woff') format('woff'), url('fonts/HelveticaNeueLTStd-Bd.ttf') format('truetype'), url('fonts/HelveticaNeueLTStd-Bd.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'Conv_HelveticaNeueLTStd-Md';
	src: url('fonts/HelveticaNeueLTStd-Md.eot');
	src: local('☺'), url('fonts/HelveticaNeueLTStd-Md.woff') format('woff'), url('fonts/HelveticaNeueLTStd-Md.ttf') format('truetype'), url('fonts/HelveticaNeueLTStd-Md.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}

body{
	background:#8ed6ed;
	padding-top:0;
}
#error{
	text-align:center;
	color:#C30;
	font-size:14px;
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}
#div_error{
	height:30px;
}
.container{
	background-image:url(images/form.png);
	background-repeat:no-repeat;
	height:600px;
}
.span4{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:22px;
	text-transform:uppercase;
	text-shadow:5px 5px 10px #000000;
	color:#FFF;
}
#former{
	margin-top:49px;
}

.lightbox{
	background-image:url(images/litebox_bg.png);
	width:100%;
	height:100%;
	position:absolute;
	z-index:99;
}
</style>

<link href="css/style_responsive.css" rel="stylesheet">

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

<?php
include "php/submit.php";
?>
<body>
      
        
  
        
        
<form method="post" enctype="multipart/form-data" action="index.php">
<div class="container">
    
	<div class="row">
		<div class="span12">        
            <div class="row">
                <div class="span8"><a href="index.php"><img width="100%" style="border:none" src="images/logo.png"></a></div>
               
                <div class="span4" id="former">
                
					<div id="div_error" class="span4"><span id="error"><?php echo $error;?></span></div>
                
                	<div class="row">
                    	<div class="span4" style="width:203px; text-align:left">full name</div>
                    </div>
                	<div class="row">
                    	<div class="span4"><span><input type="text" value="<?php echo $name;?>" name="name" id="name"></span></div>
                    </div>
                   
                    <div class="row">
                    	<div class="span4">email</div>
                    </div>
                	<div class="row">
                    	<div class="span4"><input type="text" value="<?php echo $email;?>" name="email" id="email"></div>
                    </div>
                    <div class="row">
                    	<div class="span4">address</div>
                    </div>
                	<div class="row">
                    	<div class="span4"><input type="text" value="<?php echo $address;?>" name="address" id="address"></div>
                    </div>
                    <div class="row">
                    	<div class="span4">phone number</div>
                    </div>
                    <div class="row">
                    	<div class="span4">
                         <input type="hidden" value="" id="latitude" name="latitude"/>
				        <input type="hidden" value="" id="longitude" name="longitude"/>
                        <input type="text" value="<?php echo $phone;?>" name="phone" id="phone"></div>
                    </div>
                    
                    <div class="row">
                    	<div class="span4">upload photo</div>
                    </div>
                    <div class="row">
                    	<div class="span4">
                        	
                            
                            
                            
                            <div class="fileupload fileupload-new" data-provides="fileupload">
  <div class="fileupload-new thumbnail" style="width: 50px; height: 50px;"><img src="images/AAAAAA.gif" /></div>
  <div class="fileupload-preview fileupload-exists thumbnail" style="width: 50px; height: 50px;"></div>
  <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image" id="image"/></span>
  <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
</div>



                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="span4"><input class="btn btn-primary" type="submit" value="upload" id="submit" name="submit_poll"></div>
                    </div>
                    
                    
                </div> 
                
                   
         	</div>        
        </div>
     
     
     <div class="row">
 
        <div class="hidden-phone" class="span12" style="text-align:right;">
        <a href="#prizes" role="button" data-toggle="modal"><img src="images/prizes.png"></a>
        <a id="b_vote" href="vote.php"><img src="images/vote.png"></a>
        <a href="tc.php"><img src="images/tc.png"></a></div>
        
        <div class="visible-phone" class="span12" style="text-align:left; color:#000000; font-family: 'Conv_HelveticaNeueLTStd-Bd'; bottom:0; position:absolute">
        <a href="#prizes" role="button" data-toggle="modal" style="color:#000">Prizes</a>&nbsp; | &nbsp;
        <a id="b_vote" href="vote.php" style="color:#000">Vote</a>&nbsp; | &nbsp;
        <a href="tc.php" style="color:#000">Terms & conditions</a></div>
        
    </div>
    </div>
</div>
   
        
</form>



       
<!-- Button to trigger modal -->

 
<!-- Modal -->
<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img src="images/prize.png">
</div>









    <!-- Footer
    ================================================== -->




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <script src="assets/js/bootstrap-fileupload.min.js"></script>
    
    <script src="assets/js/bootstrap-lightbox.js"></script>
    <script src="assets/js/bootstrap-lightbox.min.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>


    <!-- Analytics
    ================================================== -->
    <script>
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();

	
	
	
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
  
	  $("#submit").click(function(){
	
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		$("#error").text("Please enter your name");
		$("#name").focus();
		return false;
	}
	
	/*if( $("#age").val() == '')
	{
		$("#error").text("Please enter your age");
		$("#age").focus();
		return false;
	}*/
	
	if( $("#email").val() == '')
	{
		$("#error").text("Please enter your email");
		$("#email").focus();
		return false;
	}
	
	 if ($("#email").val().search(emailRegEx) == -1) {
          $("#error").text("Please enter valid email address");
		$("#email").focus();
		return false;
     }
  
	if( $("#address").val() == '')
	{
		$("#error").text("Please enter your address");
		$("#address").focus();
		return false;
	}
	
	/*if( $("#phone").val() == '')
	{
		$("#error").text("Please enter your phone number");
		$("#phone").focus();
		return false;
	}*/
	
	if (isNaN( $("#phone").val() )) {
    	$("#error").val("Phone number can be only numbers");
		$("#phone").focus();
		return false;
	}
	
	if( $("#image").val() == '')
	{
		$("#error").text("Please upload your image");
		$("#image").focus();
		return false;
	}
});
    </script>

  </body>
</html>

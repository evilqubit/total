<?php 
session_start();
include "includes/include_like.php";

if( (isset($_GET['like'])) && ($_GET['like'] == 1) )
{
	if($_SESSION['foundl'] == 7)
	{
		echo "<script>alert('Please like us to play');</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TOTAL QUARTZ Robot Photo Competition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <link href="css/style.css" rel="stylesheet">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
    
    <link href="assets/css/bootstrap-fileupload.css" rel="stylesheet">
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet">
    
    <link href="assets/css/bootstrap-lightbox.css" rel="stylesheet">
    <link href="assets/css/bootstrap-lightbox.min.css" rel="stylesheet">

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

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>
<style>
body{
	background:#8ed6ed;
	padding-top:0;
}

.control-label{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:22px;
	text-transform:uppercase;
	text-shadow:5px 5px 10px #000000;
	color:#FFF;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}




</style>
    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
<div  class="app-nav hidden-desktop" id="leftmenu" style="height:0px; overflow:hidden">

<div id="wrappers">
	<div id="scrollers">
		
        
    <ul class="nav">
    <li>
       <iframe style="margin-left:10px; width:100px; height:22px" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTotalLibanLebanon&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=446174518809803" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:21px;" allowTransparency="true"></iframe>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
       <a href="#prizes" class="top_menu0" role="button" data-toggle="modal"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PRIZES</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="like.php?like=1"><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">GO TO HOMEPAGE</span></a>
      </li>
      
      
   

	<li>&nbsp;</li><li>&nbsp;</li>
      <li style="line-height:30px">
       <a href="#" id="sig" style="text-align:right; color:#999">Total &copy; 2013&nbsp;&nbsp;</a>
      </li>
    </ul>
    
  </div>
</div>


</div>
        
          
    <div id="animated" style="position:relative" class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="mobile-nav btn btn-navbar" style="padding: 7px 8px 3px 8px;float: left; clear:both;" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand visible-tablet visible-desktop" style="float:right" target="_blank" href="https://www.facebook.com/TotalLibanLebanon">Total</a>
          
          <a class="brand visible-phone" style="float:right" target="_blank" href="https://www.facebook.com/TotalLibanLebanon">
          <img style="width:40px" src="images/logo_m.png">&nbsp;&nbsp;<img style="width:40px" src="images/logon_m.png"></a>
          
          <div class="nav-collapse collapse visible-desktop">
            <ul class="nav">
             <li>
       <iframe style="margin-top:10px; width:100px; height:22px" src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTotalLibanLebanon&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=446174518809803" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:21px;" allowTransparency="true"></iframe>
     		 </li>
              <li>
               <a class="top_menu" href="#prizes" role="button" data-toggle="modal">PRIZES</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <li><a class="top_menu" href="like.php?like=1">GO TO HOMEPAGE</a></li>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
            
            
            </ul>
          </div>
          
          
            
            
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->


<div id="wrapper">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
        
        
<header id="overview" class="visible-tablet visible-desktop">
  <div class="container" style="text-align:center">
    <h1><img src="images/logo.png"></h1>
   
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <table align="center" border="0"><Tr><Td><div class="row">
   
   
      <div class="span9" style="width:auto">

         <img src="images/like.jpg">

      </div>
    </div>
</Td></Tr></table>
  </div>


<div id="pullUp">
			
		</div>
	</div>
</div>


<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img data-dismiss="modal" aria-hidden="true" src="images/prize.png">
</div>

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
    </script>    

<?php include "js/menu_animation.php";?>

  </body>
</html>

<?php include "includes/header.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>


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
	/*background:#8ed6ed;
	background:#fe0032;
	background:#0033ff;
	background:#ff8500;
	background:#4db3fe;*/
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
.lightbox{
	background-image:url(images/litebox_bg.png);
	width:100%;
	height:100%;
	position:absolute;
	z-index:99;
}

.span4{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:22px;
	text-transform:uppercase;
	text-shadow:5px 5px 10px #000000;
	color:#FFF;
	float:left;
	margin:5px;
}
.span4{
	text-align:center;
	margin-top:60px;
	
}
#form_table{
	background-image:url(images/frame.png);
	/*background-repeat:no-repeat;*/
	width:206px;
	/*height:157px;*/
	margin:auto;
	border-style:solid; border-width:2px;border-color:#4773a2;
	
	
}
.title{
	position:absolute;
	width:206px;
	margin-top:-35px;
}
.invite{
	float:right;
}
.share{
	float:right;
	position:absolute;
	right:55px;
}
.vote{
	float:right;
	position:absolute;
	right:110px;
}
.thumb{
	/*position:absolute;*/
	/*height:160px;*/
}





#wrapper {
	background:#8ed6ed;
	position:absolute;
	top:51px; bottom:48px; left:-9999px;
	width:100%;
	overflow:auto;
}

#scroller {
	position:absolute; z-index:1;
	-webkit-tap-highlight-color:rgba(0,0,0,0);
	width:100%;
	padding:0;
}


#myFrame {
	position:absolute;
	top:0; left:0;
}



/**
 *
 * Pull down styles
 *
 */
#pullDown, #pullUp {
	/*background:#fff;*/
	height:40px;
	line-height:40px;
	padding:5px 10px;
	/*border-bottom:1px solid #ccc;*/
	font-weight:bold;
	font-size:14px;
	color:#888;
}
#pullDown .pullDownIcon, #pullUp .pullUpIcon  {
	display:block; float:left;
	width:40px; height:40px;
	background:url(pull-icon@2x.png) 0 0 no-repeat;
	-webkit-background-size:40px 80px; background-size:40px 80px;
	-webkit-transition-property:-webkit-transform;
	-webkit-transition-duration:250ms;	
}
#pullDown .pullDownIcon {
	-webkit-transform:rotate(0deg) translateZ(0);
}
#pullUp .pullUpIcon  {
	-webkit-transform:rotate(-180deg) translateZ(0);
}

#pullDown.flip .pullDownIcon {
	-webkit-transform:rotate(-180deg) translateZ(0);
}

#pullUp.flip .pullUpIcon {
	-webkit-transform:rotate(0deg) translateZ(0);
}

#pullDown.loading .pullDownIcon, #pullUp.loading .pullUpIcon {
	background-position:0 100%;
	-webkit-transform:rotate(0deg) translateZ(0);
	-webkit-transition-duration:0ms;

	-webkit-animation-name:loading;
	-webkit-animation-duration:2s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:linear;
}

@-webkit-keyframes loading {
	from { -webkit-transform:rotate(0deg) translateZ(0); }
	to { -webkit-transform:rotate(360deg) translateZ(0); }
}

.top_menu0{
	margin-left:10px;
	color:#FFFFFF !important;
}
.top_menu{
	color:#FFFFFF !important;
}
.app-nav{
    background:#333333;
	position:absolute;
    height: 100%;
    display: block;
    position: fixed;
    width: 84%;
    left: 0px;
    top: 0px;
    z-index: 0;
}


#wrappers {
	position:absolute; z-index:1;
	top:45px; bottom:48px; left:0;
	width:100%;
	background-color:transparent;
	overflow:auto;
}

#scrollers {
	position:absolute; z-index:1;
	-webkit-tap-highlight-color:rgba(0,0,0,0);
	width:100%;
	padding:0;
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
       <a href="#prizes" class="top_menu0" role="button" data-toggle="modal"><img style="width:25px" src="images/icons/prizes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">PRIZES</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="vote.php"><img style="width:25px" src="images/icons/vote.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">VOTE</span></a>
      </li>
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="tc.php"><img style="width:25px" src="images/icons/terms-and-conditions.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">TERMS AND CONDITIONS</span></a>
      </li>
      
      <li><hr style="border-color:#242424; height: 1px; background-color: #242424;" width=100%></li>
      <li><a href="#" style="color:#CCC; font-weight:bold">SORT BY:</a>
        <a class="top_menu0" href="tc.php"><img style="width:25px" src="images/icons/sort-by-name.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">NAMES</span></a>
      </li>
      
      <li><hr style="border-color:#2D2D2D" width=100%></li>
      <li>
        <a class="top_menu0" href="tc.php"><img style="width:25px" src="images/icons/sort-by-votes.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">VOTES</span></a>
      </li>

	<li></li>
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
          <a class="brand visible-tablet visible-desktop" style="float:right" target="_blank" href="https://www.facebook.com/pages/Publiscreen-Apps/581669711863250">Total</a>
          
          <a class="brand visible-phone" style="float:right" target="_blank" href="https://www.facebook.com/pages/Publiscreen-Apps/581669711863250">
          <img style="width:40px" src="images/logo_m.png">&nbsp;&nbsp;<img style="width:40px" src="images/logon_m.png"></a>
          
          <div class="nav-collapse collapse visible-desktop">
            <ul class="nav">
              <li>
               <a class="top_menu" href="#prizes" role="button" data-toggle="modal">PRIZES</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="vote.php">VOTE</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
              <li>
                <a class="top_menu" href="tc.php">TERMS AND CONDITIONS</a>
              </li>
              <li><hr style="border-color:#000" width=100%></li>
            
            </ul>
          </div>
          
          
            
            
        </div>
      </div>
    </div>
    

<div id="wrapper">
	<div id="scroller">
		<div id="pullDown">
			
		</div>
<!-- Subhead
================================================== -->
<header id="overview" class="visible-tablet visible-desktop">
  <div class="container" style="text-align:center">
    <h1><img src="images/logo.png"></h1>
   
  </div>
</header>



  <div class="container">
  
  	<div class="row">
    	<div class="span12">
       		
            <div class="row">
            	
            <!-- Docs nav
    ================================================== -->
 <?php   
 
 $_SESSION['limit'] = 0;
             
             if (!isset($_GET["sort"]) || empty($_GET["sort"]))
			{
				$sortmethod = 0;
			} 
			else {
				$sortmethod = $_GET["sort"];
			}
				if($sortmethod == 1)
				{
                	$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['limit']},5 ";
				}
				else
				{
					if ($sortmethod == 2)
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC LIMIT {$_SESSION['limit']}, 5";
					}
					else
					{
						$selectQuery = "SELECT * FROM participants";
					}
				}
				?>
                
				<input type="hidden" value="<?php echo $sortmethod;?>" id="sortmethod">  
                
              <?php
                $query_result = mysql_query($selectQuery);
				$row = mysql_fetch_array($query_result);
				
               while ($row = mysql_fetch_array($query_result))
                {
                ?>
                
                <?php include "php/gallery_table.php";?>
                
            <?php
			    }
				?>

                
                
                </div>
            
            
          </div>
     </div>
</div>


<div id="pullUp">
			<span class="pullUpIcon"></span><span class="pullUpLabel">Pull up to refresh...</span>
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


<script>

$(document).ready(function(){
                
                
                // Close/Open Navigation
               var myheight = $(document).height();
                
				$(".mobile-nav").on("click",function(e){
                    e.preventDefault();
					
					 var width = ($(window).width())*0.80;
           			
				
                    $(this).toggleClass('open-nav');
                    
                    if($(this).hasClass('open-nav')){
                        
                        $("#animated").animate({
                            left: width
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: width
                        }, { duration: 240, queue: false });
						
						
                    }
                    else {
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
                    }
					$("#leftmenu").css({"height":myheight});
 
                });
            });
			
			
$(document).ready(function(e) {
	
	var myheight = $(document).height();
	var mywidth = $(document).width();
	$('#animated').css({"width":mywidth});
    var newheight = myheight - 51;
	$('#wrapper').css({"height":newheight});
	
	$("#leftmenu").css({"height":0});
	$('#wrappers').css({"height":newheight});
	myScrolls.refresh();
	
	
});

$(window).resize(function() {
	
	 // Close/Open Navigation
                var width = ($(window).width())*0.80;
           		
              
                        $("#animated").animate({
                            left: 0
                        }, { duration: 240, queue: false });
						$("#wrapper").animate({
                            left: 0
                        }, { duration: 240, queue: false });
                  
    
			
			
			
	var myheight = $(window).height();	
	var mywidth = $(window).width();

	$('#animated').css({"width":mywidth});
	
    var newheight = myheight;
	$('#wrapper').css({"height":newheight});
	
	$("#leftmenu").css({"height":newheight});
	$('#wrappers').css({"height":newheight});
	myScrolls.refresh();
	
	
});

</script>


<script src="js/quo.js"></script>
<script src="js/quo.debug.js"></script>
    
<script>
$$('#animated').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
});


$$('#animated').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
});

$$('#wrapper').swipeLeft(function() {
    // affects "span" children/grandchildren
	
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: 0
	}, { duration: 240, queue: false });
	$("#leftmenu").css({"height":0});
	
	myScrolls.refresh();
});


$$('#wrapper').swipeRight(function() {
    // affects "span" children/grandchildren
	
	var myheight = $(document).height();
	var width = ($(window).width())*0.80;
	
	$(this).toggleClass('open-nav');
	
    $("#animated").animate({
		left: width
	}, { duration: 240, queue: false });
	$("#wrapper").animate({
		left: width
	}, { duration: 240, queue: false });
	
	$("#leftmenu").css({"height":myheight});
	
	myScrolls.refresh();
});


</script>    
    
  </body>
</html>

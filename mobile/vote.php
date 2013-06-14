<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Total</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    
    <script type="text/javascript" src="src/iscroll.js"></script>




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
    
    
    
    
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.0.6"></script>
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>



<script type="text/javascript">




function get_images(){

	alert();
	$.get('php/get_gallery.php', function(data) {
		$('#gallery_table').append(data);
	});
	
}



var myScroll,
	pullDownEl, pullDownOffset,
	pullUpEl, pullUpOffset,
	generatedCount = 0;



function pullUpAction () {
	setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!

		get_images();
		
		myScroll.refresh();		// Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);	// <-- Simulate network congestion, remove setTimeout from production!
}

function loaded() {
	pullDownEl = document.getElementById('pullDown');
	pullDownOffset = pullDownEl.offsetHeight;
	pullUpEl = document.getElementById('pullUp');	
	pullUpOffset = pullUpEl.offsetHeight;
	
	myScroll = new iScroll('wrapper', {
		useTransition: true,
		topOffset: pullDownOffset,
		onRefresh: function () {
			if (pullDownEl.className.match('loading')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
			} else if (pullUpEl.className.match('loading')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Pull up to load more...';
			}
		},
		onScrollMove: function () {
			if (this.y > 5 && !pullDownEl.className.match('flip')) {
				pullDownEl.className = 'flip';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Release to refresh...';
				this.minScrollY = 0;
			} else if (this.y < 5 && pullDownEl.className.match('flip')) {
				pullDownEl.className = '';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
				this.minScrollY = -pullDownOffset;
			} else if (this.y < (this.maxScrollY - 5) && !pullUpEl.className.match('flip')) {
				pullUpEl.className = 'flip';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Release to refresh...';
				this.maxScrollY = this.maxScrollY;
			} else if (this.y > (this.maxScrollY + 5) && pullUpEl.className.match('flip')) {
				pullUpEl.className = '';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Pull up to load more...';
				this.maxScrollY = pullUpOffset;
			}
		},
		onScrollEnd: function () {
			if (pullDownEl.className.match('flip')) {
				pullDownEl.className = 'loading';
				pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Loading...';				
				pullDownAction();	// Execute custom function (ajax call?)
			} else if (pullUpEl.className.match('flip')) {
				pullUpEl.className = 'loading';
				pullUpEl.querySelector('.pullUpLabel').innerHTML = 'Loading...';				
				pullUpAction();	// Execute custom function (ajax call?)
			}
		}
	});
	
	setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 800);
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
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
.span6{
	text-align:center;
	margin-top:60px;
	border:solid
}
#form_table{
	background-image:url(images/frame.png);
	background-repeat:no-repeat;
	width:206px;
	height:157px;
	margin:auto;
	
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
	position:absolute;
	height:160px;
}
</style>

<style type="text/css" media="all">
#wrapper {
	position:absolute; z-index:1;
	top:45px; bottom:48px; left:-9999px;
	width:100%;
	overflow:auto;
}

#scroller {
	position:absolute; z-index:1;
	-webkit-tap-highlight-color:rgba(0,0,0,0);
	width:100%;
	padding:0;
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

</style>
<script>
$(document).ready(function() {
		$(".fancybox").fancybox({
			
		});
	});
</script>

<link href="css/style_responsive.css" rel="stylesheet">

<?php
include "php/submit.php";
?>
<body>
      
        
<div class="container">
    
	<div class="row">
		<div class="span12" >        
           
            <div class="row hidden-phone">
                <div class="span8"><img src="images/logo.png"></div>
                <div class="span4" ><img src="images/title.png"></div>
             </div>
             
             <div class="row visible-phone">
                <div class="span12"><img src="images/logo.png"></div>
                

             </div>
                
             
               
        <div class="row">  
                <div class="span12" style="border:solid; position:absolute; height:500px;">        
               
               
    <div id="wrapper" style="border:solid">
	<div id="scroller">
		<div id="pullDown">
			
		</div>   
               
               
               
             <div class="row" id="gallery_table">  
                <div class="span6">
                
                	<div id="form_table">
                    
                    	<div class="title">
                            <div class="invite"><a href="#"><img src="images/invite.png"></a></div>
                            <div class="share"><a onclick="document.getElementById('total_image').value='gallery/t/1.jpg'" href="#"><img src="images/share.png"></a></div>
                            <div class="vote"><a href="#"><img src="images/vote_b.png"></a></div>
                        </div>  
                          
                        <div class="thumb">
                         <a class="fancybox" rel="group" href="gallery/1.jpg"><img src="gallery/t/1.jpg" style="margin:9px; width:190px; height:124px" ></a>
                          <span style="position:absolute;bottom:4px;right:10px;color:#034ea2;font-size:12px;font-family:\'Conv_HelveticaNeueLTStd-Md\';">Elie&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;0 Vote(s)</span>
                        </div>
                       
                    </div>
                    
                </div>
           </div>    


		<div id="pullUp">
			<span class="pullUpIcon"></span><span class="pullUpLabel">Pull up to refresh...</span>
		</div>
	</div>
</div>

		</div>
        </div>








             
                
         	
        </div>
     
     
        
    </div>
   </div>




       
<!-- Button to trigger modal -->

 
<!-- Modal -->
<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img src="images/prize.png">
</div>




<input type="hidden" value="" id="total_image"/>




    <!-- Footer
    ================================================== -->




    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/widgets.js"></script>
    <!--<script src="assets/js/jquery.js"></script>-->
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

	  
	  $("#submit").click(function(){
	
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		$("#error").text("Please enter your name");
		$("#name").focus();
		return false;
	}
	
	if( $("#age").val() == '')
	{
		$("#error").text("Please enter your age");
		$("#age").focus();
		return false;
	}
	
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
	
	if( $("#phone").val() == '')
	{
		$("#error").text("Please enter your phone number");
		$("#phone").focus();
		return false;
	}
	
	if( $("#image").val() == '')
	{
		$("#error").text("Please upload your image");
		$("#phone").focus();
		return false;
	}
});
    </script>

  </body>
</html>

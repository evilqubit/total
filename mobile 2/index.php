<?php include "includes/header.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<?php include "js/iscroll_function.php";?>
<style>
#error{
	text-align:center;
	color:#C30;
	font-size:14px;
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
}
#div_error{
	height:30px;
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
<?php

include "php/submit.php";

?>
    
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


          <form class="form-horizontal" action="index.php">
          
          <div class="control-group">
	          <div class="span4">&nbsp;</div>
          </div>
          
          <div class="control-group">
	          <div id="div_error" class="span4" style="text-align:center"><span id="error"></span></div>
          </div>
          
            <div class="control-group">
            
              <label class="control-label" for="name">Full Name</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="name" id="name" type="text" placeholder="FULL NAME" value="<?php echo $name;?>">
                </div>
              </div>
            </div>
                    
             <div class="control-group">
              <label class="control-label" for="email">EMAIL</label>
              <div class="controls">
                <div class="input-prepend">
                 <input class="span2" name="email" id="email" type="text" placeholder="EMAIL" value="<?php echo $email;?>">
                </div>
              </div>
            </div>
            
             <div class="control-group">
              <label class="control-label" for="address">ADDRESS</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="address" id="address" type="text" placeholder="ADDRESS" value="<?php echo $address;?>">
                </div>
              </div>
            </div>
            
             <div class="control-group">
              <label class="control-label" for="phone">PHONE NUMBER</label>
              <div class="controls">
                <div class="input-prepend">
                  <input class="span2" name="phone" id="phone" type="text" placeholder="PHONE" value="<?php echo $phone;?>">
                </div>
              </div>
            </div>
            
             
            
             <div class="control-group">
              <label class="control-label" for="inputIcon"></label>
              
               <div class="fileupload fileupload-new" data-provides="fileupload">
  <span class="btn btn-file"><span class="fileupload-new">CHOOSE PHOTO</span><span class="fileupload-exists">Change</span><input type="file" name="image" id="image"/></span>
  <span class="fileupload-preview"></span>
  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
</div>



            </div>
            
             <div class="control-group">
          
              <div class="controls">
                <div class="input-prepend">
                  <input for="inputIcon" class="btn btn-primary" type="submit" value="upload" id="submit" name="submit_poll">
                </div>
              </div>
            </div>
          </form>


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
    
    
<script>

$("#submit").click(function(){

	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	
	if( $("#name").val() == '')
	{
		$("#error").text("Please enter your name");
		$("#name").focus();
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
					$("#leftmenu").css({"height":myheight,
										"width":width});
 
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
	
	$("#leftmenu").css({"height":newheight,
	"width":width});
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
	$("#leftmenu").css({"height":0,
						"width":width});
	
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
	
	$("#leftmenu").css({"height":myheight,
						"width":width});
	
	myScrolls.refresh();
});


</script>  

  </body>
</html>

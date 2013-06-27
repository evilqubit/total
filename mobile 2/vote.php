<?php include "includes/header.php";?>

<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>


<script type="text/javascript">


function get_images(){

	var sortmethod = $("#sortmethod").val();
	$.get('php/get_gallery.php?sort=' + sortmethod, function(data) {

		$('#gallery_table').append(data);
		myScroll.refresh();
	});
	
}



var myScroll,
	pullDownEl, pullDownOffset,
	pullUpEl, pullUpOffset,
	generatedCount = 0;


function pullUpAction () {
	setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!

		get_images();
		myScroll.refresh();	// Remember to refresh when contents are loaded (ie: on ajax completion)
	}, 1000);	// <-- Simulate network congestion, remove setTimeout from production!
}

function loaded() {
	pullDownEl = document.getElementById('pullDown');
	pullDownOffset = pullDownEl.offsetHeight;
	pullUpEl = document.getElementById('pullUp');	
	pullUpOffset = pullUpEl.offsetHeight;
	
	myScroll = new iScroll('wrapper', {
		useTransition: true,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		},
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









var myScrolls;
function loadeds() {
	myScrolls = new iScroll('wrappers', {
		useTransform: false,
		onBeforeScrollStart: function (e) {
			var target = e.target;
			while (target.nodeType != 1) target = target.parentNode;

			if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
				e.preventDefault();
		}
	});
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
document.addEventListener('DOMContentLoaded', loadeds, false);
</script>

<?php include "php/voting.php";?>

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
	text-align:center;
	margin-top:60px;
	
}
#form_table{
	background-image:url(images/frame.png);
	width:206px;
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
        <a class="top_menu0" href="index.php"><img style="width:25px" src="images/icons/home.png">&nbsp;&nbsp;<span style="margin-top:3px; position:absolute">GO TO HOMEPAGE</span></a>
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
            
              <li><a class="top_menu" href="#prizes" role="button" data-toggle="modal">PRIZES</a></li>
              
              <li><a class="top_menu" href="index.php">GO TO HOMEPAGE</a></li>
              
              <li><a class="top_menu" href="tc.php">TERMS AND CONDITIONS</a></li>
              
              <li><a href="#">|</a></li>
              <li><a class="top_menu" href="#">SORT BY:</a></li>
              
              <li><a class="top_menu" href="vote.php?sort=1">NAME</a></li>
              
              <li><a class="top_menu" href="vote.php?sort=2">VOTE</a></li>
            
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
       		
            <div class="row" id="gallery_table">
            	
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
                	$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC LIMIT {$_SESSION['limit']}, 5";
				}
				else
				{
					if ($sortmethod == 2)
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC LIMIT {$_SESSION['limit']}, 5";
					}
					else
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC LIMIT {$_SESSION['limit']}, 5";
					}
				}
				?>
                
				<input type="hidden" value="<?php echo $sortmethod;?>" id="sortmethod">  
                
              <?php
                $query_result = mysql_query($selectQuery);
				
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
function vote(img){
	window.location = 'vote.php?gallery_image='+ img;
}
</script>
<?php include "js/menu_animation.php";?>
    
  </body>
</html>

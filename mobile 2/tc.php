<?php include "includes/header.php";?>

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

.control-label{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	font-size:22px;
	text-transform:uppercase;
	text-shadow:5px 5px 10px #000000;
	color:#FFF;
}
.fileupload-new{
	font-family: 'Conv_HelveticaNeueLTStd-Bd';
	text-transform:uppercase;
	text-shadow:5px 5px 10px #000000;
}
.lightbox{
	background-image:url(images/litebox_bg.png);
	width:100%;
	height:100%;
	position:absolute;
	z-index:99;
}
</style>

    
  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" target="_blank" href="https://www.facebook.com/pages/Publiscreen-Apps/581669711863250">Total</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
               <a href="#prizes" role="button" data-toggle="modal">PRIZES</a>
              </li>
              <li class="">
                <a href="vote.php">VOTE</a>
              </li>
              <li class="">
                <a href="index.php">BACK TO HOMEPAGE</a>
              </li>
            
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Subhead
================================================== -->
<header id="overview">
  <div class="container" style="text-align:center">
    <h1><img src="images/logo.png"></h1>
   
  </div>
</header>


  <div class="container">

    <!-- Docs nav
    ================================================== -->
    <table align="center"><Tr><Td><div class="row">
   
   
      <div class="span9" style="font-family: 'Conv_HelveticaNeueLTStd-Md';">


		<?php include "php/terms.php";?>

      </div>
    </div>
</Td></Tr></table>
  </div>



<div id="prizes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <img src="images/prize.png">
</div>
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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

  </body>
</html>

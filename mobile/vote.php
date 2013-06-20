<?php include "includes/header.php"; ?>
<script src="assets/js/jquery.js"></script>
<script type="text/javascript" src="src/iscroll.js"></script>



<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.0.6"></script>
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=2.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=2.0.6"></script>



<?php include "js/iscroll_function.php";?>

<link href="css/style_vote.css" rel="stylesheet">


<script>
$(document).ready(function() {
		$(".fancybox").fancybox({
			
		});
	});
</script>

<link href="css/style_responsive_vote.css" rel="stylesheet">
</head>

<?php include "php/voting.php";?>

<body>

<div id="header"><img style="width:100%" src="images/logo.png"></div>
<div id="background" style="position:absolute"><img src="images/form.png"></div>
<div id="wrapper">
	<div id="scroller">
		<div id="pullDown">
			
		</div>



			<table align="center" border="0"><Tr><Td align="center" id="gallery_table">
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
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC LIMIT  {$_SESSION['limit']}, 5";
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
				</Td></Tr></table>
		
		<div id="pullUp">
			<span class="pullUpIcon"></span><span class="pullUpLabel">Pull up to refresh...</span>
		</div>
	</div>
</div>
<div id="footer"><span style="color:#F00; text-decoration:underline">SORT BY:</span> <a href="vote.php?sort=1">NAME</a> <span style="color:#F00">/</span> <a href="vote.php?sort=2">VOTES</a></div>
<input type="hidden" value="" id="total_image"/>

<script src="https://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">

$(window).ready(function(e) {
    var width = $(window).width();
	if(width > 810)
	{
		width = 810;
	}
	$("#header").width(width);
	$("#wrapper").width(width);
	$("#footer").width(width);
	
});

$(window).resize(function(e) {

    var width = $(window).width();

	if(width > 810)
	{
		width = 810;
	}
	

	$("#header").width(width);
	$("#wrapper").width(width);
	$("#footer").width(width);
});

function vote(img){
	window.location = 'vote.php?gallery_image='+ img;
}
 FB.init({
        appId  : '281325538680004',
        frictionlessRequests: true,
    });

      function sendRequestToRecipients() {
        var user_ids = document.getElementsByName("user_ids")[0].value;
        FB.ui({method: 'apprequests',
          message: 'message',
          to: user_ids, 
        }, requestCallback);
      }

      function sendRequestViaMultiFriendSelector() {
        FB.ui({method: 'apprequests',
          message: 'message'
        }, requestCallback);
      }
      
      function requestCallback(response) {
        // Handle callback here
      }

$(document).ready(function() {

		$('.shareit').click(function(e){
			var myimage = $('#total_image').val();
		
			var n=myimage.replace("../","");

			var img = 'http://lebappsonline.com/dev01/total/' + n;
			
			e.preventDefault();
			FB.ui(
			{
			method: 'feed',
			name: 'Total',
			link: '<?php echo $config['appbaseurl'];?>',
			picture: img,
			caption: 'caption',
			description: '',
			message: ''
			});
		});

	});
</script>
</body>
</html>
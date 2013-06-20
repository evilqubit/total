<?php include "includes/header.php"; ?>

<?php

if(isset($_GET['v']) && ($_GET['v'] == 1)) 
{
	$text = "thank you for voting";
}
else
{
	$text = "you have already voted<Br>come back tomorrow";
}
?>

<div id="after_vote">


<div id="terms" class="lightbox" style="display:none">
        	
            <div id="terms_back_bg">
            <div id="terms_back">
          
            
        	<div id="content_1" class="content">
        	<?php include "php/terms.php";?>
            </div>
            
            </div>
           
            </div>
        </div>
        
        
        
        <div id="prizes" class="lightbox">
        	
          
            <table align="center" style="width:810px; height:600px;"><Tr><Td align="center">
            <img style="height:600px" src="images/prize.png" />
        	</Td></Tr></table>
            
        </div>
        
        
        
    <div id="total_logo"><a href="index.php"></a></div>
        <div id="after_table">
            <div id="after_text"><?php echo $text;?></div>
            <div id="after_button"><a href="vote.php"><img src="images/index.png" /></a></div>
        </div>
    
    </div>
</div>
<div id="tc_prize"><table border="0" align="center"; height="50px"><tr><Td><span id="b_tc" style="cursor:pointer">TERMS & CONDITIONS</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span id="b_prizes" style="cursor:pointer">PRIZES</span>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" style="text-decoration:none; color:#FFF">Go to Homepage</a></Td></tr></table></div>


<script src="js/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
<!-- custom scrollbars plugin -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
$('.lightbox').click(function(){
	$('#terms').css({
		"display":"none"
		});
		
	$('#prizes').css({
		"display":"none"
		});
});

var scrolling = 0;

$('#b_tc').click(function(){
	$('#terms').css({
		"display":"block"
		});
		
		if(scrolling == 0)
		{ scrolling = 1;		
			$("#content_1").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"light-thin"
				});
		}
});

$('#b_prizes').click(function(){
	$('#prizes').css({
		"display":"block"
		});
});
</script>
<?php include "includes/footer.php"; ?>
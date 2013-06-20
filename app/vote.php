<?php include "includes/header.php"; ?>

<?php include "php/user_vote.php";?>
<style type="text/css">

#wrapper
{
	position:absolute;
	width: 757px;
	height: 422px;
	margin-left:26px;
	margin-top:131px;
}
.thumb
{
	transition: all 0.35s ease-in-out;
	-webkit-transition: all 0.35s ease-in-out;
	-moz-transition: all 0.35s ease-in-out;
	box-shadow: 0 0 10px rgba(81, 203, 238, 0);
	-webkit-box-shadow: 0 0 10px rgba(81, 203, 238, 0);
	-moz-box-shadow: 0 0 10px rgba(81, 203, 238, 0);
	
	
	width:206px;height:157px;margin-left:9px; background: url(images/frame.png); position: absolute;border-style:solid; border-width:2px;;border-color:#4773a2;
}
.thumb:hover
{
	box-shadow: 0 0 50px rgba(61, 106, 146, 1);
	-webkit-box-shadow: 0 0 50px rgba(61, 106, 146, 1);
	-moz-box-shadow: 0 0 50px rgba(61, 106, 146, 1);
}
.voteButton
{
	margin-top:-37px;
	margin-left:135px;
	width:46px;
	height:35px;
	padding-left:5px;
	position:absolute;
	z-index:5;
}
#swapBack
{
	position:absolute;
	margin-left:638px;
	margin-top:430px;
}
#swapFront
{
	position:absolute;
	margin-left:703px;
	margin-top:430px;
}
</style>

<script>
$(document).ready(function() {
		$(".fancybox").fancybox({
			
		});
	});
</script>

<div id="vote">

<div style="position:absolute; bottom:12; left:142; width:160px; height:23px; z-index:99">
               
                <a href="#" onClick="sortMethodChanged(1)" style="float:left; width:67px; height:23px; display:block; background-image:url(images/home.png);
	background-repeat:no-repeat;border:1;"></a>
                <a href="#" onClick="sortMethodChanged(2)" style="float:right; width:70px; height:23px; display:block;background-image:url(images/home.png);
	background-repeat:no-repeat;border:1;"></a>

</div>


<div id="wrapper">
    	
        <div id="internalWrapper" style="margin:0;padding:0;width: 780px; height: 426px;position:absolute;overflow:hidden;">
        	<div class="qDiv" style="margin:0;padding:0;width: 780px; height: 426px;position:absolute;">
			<?php
                $colCounter = 0;
                $rowCounter = 0;
				$counter = 0;
				$sectionCounter = 0;
				$inFirstRow = 0;
				if (!isset($_GET["sort"]) || empty($_GET["sort"]))
				{
					$sortmethod = 0;
				} 
				else {
					$sortmethod = $_GET["sort"];
				}
				if($sortmethod == 1)
				{
                	$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY name ASC";
				}
				else
				{
					if ($sortmethod == 2)
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY votes DESC";
					}
					else
					{
						$selectQuery = "SELECT * FROM participants WHERE status = '1' ORDER BY id DESC";
					}
				}
				
                $query_result = mysql_query($selectQuery);
                while ($property = mysql_fetch_array($query_result))
                {
					if($counter%6==0 && $counter != 0)
					{
						$sectionCounter ++;
						echo '
							</div>
							<div class="qDiv" style="padding:0;width: 810px; height: 600px;margin-left:'.($sectionCounter*810).'px;position:absolute;">
						';
					}
					
                    echo '
					<div style="z-index:6;width:224px;height:183px;margin-left:'.(($colCounter*273)+-6).'px;margin-top:'.(40+(218*$inFirstRow)).'px; position: absolute;">
					
                        <div id="thumb'.$rowCounter.''.$colCounter.'" class="thumb">
						
						  <a class="fancybox" rel="group" href="gallery/'.$property["image"].'"><img src="gallery/t/' . $property['image'] .'" style="position:absolute; margin:9px; width:190px; height:124px" ></a>
                            
                        <span style="position:absolute;bottom:4px;right:10px;color:#034ea2;font-size:12px;font-family:\'Conv_HelveticaNeueLTStd-Md\';">'.$property["name"].'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'.$property["votes"].' Vote(s)</span>
						
						
						
						
							<form id="vote'.$rowCounter.''.$colCounter.'" name="vote'.$rowCounter.''.$colCounter.'" action="vote.php" action="post">
								<input type="hidden" value="'.$property["id"].'" id="partid" name="partid" />
								<div class="voteButton" style="right:0px;">
									<a href="#" onClick="voteFor(\'vote'.$rowCounter.''.$colCounter.'\')">
									<img src="images/vote_b.png">
								</div>
								<div class="voteButton" style="right:55px;">
									<a href="#" class="shareit" onclick="document.getElementById(\'total_image\').value=\'gallery/t/'.$property["image"].'\'" />
									<img src="images/share.png">
									</a>
								</div>
								<div class="voteButton" style="right:110px;">
									<a href="#" onClick="sendRequestViaMultiFriendSelector()">
									<img src="images/invite.png">
									</a>
								</div>
							</form>
							
                          
                       
                        </div>
						</div>
                        ';
                    $counter++;
                    $colCounter++;
                    
                    if($colCounter == 3)
                    {
						if($inFirstRow == 0)
							$inFirstRow = 1;
						else $inFirstRow = 0;
						
                        $rowCounter++;
                        $colCounter = 0;
                    }
 
                }
            ?>
            </div>
            </div>
            <a href="#" onClick="swapback();" id="swapBack"><img src="images/previous.png" /></a>
            <a href="#" onClick="swapfront();" id="swapFront"><img src="images/next.png" /></a>
            <input type="hidden" value="" id="total_image"/>
			<a id="home_button" href="../index.php"></a>
        
               
        </div>
    </div>
    <?php
				
				echo '<script type="text/javascript">var pageNumber = '.ceil($counter/6).'</script>';
    ?>
    
    
    
</div> 


<script src="https://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	var pageCounter = 0;	
	
	function swapfront() {
		if(pageCounter >= 0 && pageCounter < pageNumber-1)
		{
			pageCounter++;
			$(".qDiv").animate({
				left: '-=810'
			}, 300, function () {
			});
		}

	}
	function swapback() {
		if(pageCounter > 0 && pageCounter <= pageNumber)
		{
			pageCounter--;
			$(".qDiv").animate({
				left: '+=810'
			}, 300, function () {
			});
		}
	}
	
	function sortMethodChanged(val)
	{
		
		self.location.href = "vote.php?sort="+val;
		
	}
	
	function voteFor(formid)
	{
		document.getElementById(formid).submit();
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
			
			var img = $('#total_image').val();
alert(img);
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

<?php include "includes/footer.php";?>
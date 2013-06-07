<?php include "includes/header.php"; ?>
<style type="text/css">

#wrapper
{
	position:absolute;
	width: 801px;
	height: 601px;
	overflow: hidden;
}
.thumb
{
	transition: all 0.35s ease-in-out;
	-webkit-transition: all 0.35s ease-in-out;
	-moz-transition: all 0.35s ease-in-out;
	box-shadow: 0 0 10px rgba(81, 203, 238, 0);
	-webkit-box-shadow: 0 0 10px rgba(81, 203, 238, 0);
	-moz-box-shadow: 0 0 10px rgba(81, 203, 238, 0);
}
.thumb:hover
{
	box-shadow: 0 0 50px rgba(61, 106, 146, 1);
	-webkit-box-shadow: 0 0 50px rgba(61, 106, 146, 1);
	-moz-box-shadow: 0 0 50px rgba(61, 106, 146, 1);
}
.pushButton
{
	position: absolute;
	margin-left: 230px;
	margin-top: 575px;
	width: 125px;
	height: 37px;
	background:url(images/submitbuttonupload.png);
}
.innerSpan
{
	opacity: 1.0;
	filter:alpha(opacity=100);
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
	text-align:center;
	margin: auto;
	margin-top: 4px;
	color: white;
	font-size: 20px;
	font-weight: bold;
}
.innerSpan:hover
{
	opacity: 1.0;
	filter:alpha(opacity=100);
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
	text-align:center;
	margin: auto;
	margin-top: 5px;
	color: pink;
	font-size: 20px;
	font-weight: bold;
}
.voteButton
{
	margin-top:-22px;
	margin-left:135px;
	width:60px;
	color:00306a;
	background-color:#60a3e7;
	padding-left:5px;
	position:absolute;
	text-decoration:none;
	z-index:5;
}
.voteButton:hover
{
	color:#333;
	background-color:white;
}
#swapBack
{
	position:absolute;
	background:url(images/previous.png);
	margin-left:30px;
	margin-top:550px;
	width:55px;
	height:33px;
	background-repeat:no-repeat;
}
#swapFront
{
	position:absolute;
	background:url(images/next.png);
	margin-left:730px;
	margin-top:550px;
	width:55px;
	height:33px;
	background-repeat:no-repeat;
}
</style>

<div id="vote">



<div id="wrapper">
    	<img style="width: 100%; height: 100%;float:left;" src="images/05/bg.jpg" />
        <div id="internalWrapper" style="margin:0;padding:0;width: 810px; height: 600px;position:absolute;overflow:hidden;">
        	<div class="qDiv" style="margin:0;padding:0;width: 810px; height: 600px;position:absolute;">
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
				if($sortmethod == 0)
				{
                	$selectQuery = "SELECT * FROM participants ORDER BY id DESC";
				}
				if($sortmethod == 1)
				{
                	$selectQuery = "SELECT * FROM participants ORDER BY name ASC";
				}
				if ($sortmethod == 2)
				{
                	$selectQuery = "SELECT * FROM participants ORDER BY votes DESC";
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
					<div id="frame" style="z-index:6;width:224px;height:183px;margin-left:'.(($colCounter*270)+22).'px;margin-top:'.(156+(192*$inFirstRow)).'px; position: absolute;">
					<div id="captChi" style="overflow-y: scroll;margin-top:93px; margin-left:14px; z-index:10; font-size:11px; width:200px; height:60px; position:absolute; background:black; color:white; opacity:0.8;text-align:center;">'.$property["name"].'</div>
                        <div id="thumb'.$rowCounter.''.$colCounter.'" class="thumb" style="width:200px;height:151px;margin-top:1px;margin-left:14px; ;background: url(gallery/t/'.$property["image"].'); position: absolute;">
						
							<form id="vote'.$rowCounter.''.$colCounter.'" name="vote'.$rowCounter.''.$colCounter.'" action="submituservote.php" action="post">
								<input type="hidden" value="'.$property["id"].'" id="partid" name="partid" />
								<div class="voteButton">
									<a href="#" onClick="voteFor(\'vote'.$rowCounter.''.$colCounter.'\')" style="display:block;text-decoration:none;color:black;"/>
									Vote
								</div>
								<div class="voteButton" style="margin-left:68px;">
									<a href="#" class="shareit" onclick="document.getElementById(\'akon_image\').value=\'gallery/t/'.$property["image"].'\'"  style="display:block;text-decoration:none;color:black;">
									Share
									</a>
								</div>
								<div class="voteButton" style="margin-left:0px;">
									<a href="#" onClick="sendRequestViaMultiFriendSelector()"  style="display:block;text-decoration:none;color:black;">
									Invite
									</a>
								</div>
							</form>
							
                            <a class="fancybox" rel="group" href="gallery/t/'.$property["image"].'" style="width:200px;height:180px;display:block;margin-top:-16px">
                       
                            </a>
                        <span style="position:absolute;width:100%;margin-top:-13px;text-align:center;color:#FFFFFF;font-weight:500;font-size:11px;">'.$property["name"].'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'.$property["votes"].' Vote(s)</span>
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
            <a href="#" onClick="swapback();"><div id="swapBack"></div></a>
            <a href="#" onClick="swapfront();"><div id="swapFront"></div></a>
            <input type="hidden" value="" id="akon_image"/>
			<a id="home_button" href="../index.php"></a>
        
                <div style="position:absolute; right:33px;top:44px; width:206px; height:23px">
               
                <a href="#" onClick="sortMethodChanged(1)" style="float:left; width:67px; height:23px; display:block; background-image:url(images/home.png);
	background-repeat:no-repeat;
	border:0;"></a>
                <a href="#" onClick="sortMethodChanged(2)" style="float:right; width:70px; height:23px; display:block;background-image:url(images/home.png);
	background-repeat:no-repeat;
	border:0;"></a>

                </div>
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
</script>

<?php include "includes/footer.php";?>
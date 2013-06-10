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

	<div id="after_table">
    	<div id="after_text"><?php echo $text;?></div>
    	<div id="after_button"><a href="vote.php"><img src="images/index.png" /></a></div>
    </div>

</div>

<?php include "includes/footer.php"; ?>
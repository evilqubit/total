<?php include "includes/header.php";?>

<?php

$remove = 0;
if(isset($_GET['user']) && ($_GET['user'] != '') )
{
	$user = $_GET['user'];
}
else
{
	echo '<script>window.location = "votes.php";</script>';
}

include "php/approve.php";
include "php/disapprove.php";

$n = 0;
$i = 0;


$db = "SELECT * FROM participants WHERE id = '$user'";
$extract = mysql_query ($db);
$row = mysql_fetch_array($extract);

?>
	<section id="main" class="column">	
		
		<div id="delete_message"></div>
        
        <?php
		
		if ($done == '1')
		{echo '<h4 class="alert_success" style="display:block">USER was Approved!</h4>';}
		if ($done == '2')
		{echo '<h4 class="alert_success" style="display:block">User was Disapproved!</h4>';}
		
		if($row['status'] == 0)
		{
			$status = 'Waiting';
		}
		if($row['status'] == 1)
		{
			$status = 'Approved';
		}
		if($row['status'] == 2)
		{
			$status = 'Disapproved';
		}
		
		?>
        
		<article class="module width_full">
			<header><h3><?php echo $row['name'];?> Has Got <?php echo $row['votes'];?> Vote(s)</h3></header>
				<div class="module_content">
						<fieldset>
                        <label>User</label>
                        <table style="width:400px">
                        <tr><td align="center" colspan="3">
							<a target="_blank" href="http://www.facebook.com/<?php echo $row['fb_id'];?>"><img src="http://graph.facebook.com/<?php echo $row['fb_id'];?>/picture" border="0"></a></td></tr>
							<TR><Td><b>Name:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['name'];?></Td></TR>
                            <tr><td><b>Age:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['age'];?></td></tr>
                            <tr><td><b>Email:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['email'];?></td></tr>
                            <tr><td><b>Address:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['address'];?></td></tr>
                            <tr><td><b>Country:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['country'];?></td></tr>
                            <tr><td><b>Phone:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['phone'];?></td></tr>
                            <tr><td><b>Date:</b></td><Td>&nbsp;&nbsp;</Td><td><?php echo $row['date'];?></td></tr>
                            <tr><Td colspan="3"><Br><Br></Td></tr>
                            <tr><td valign="top"><b>Picture:</b></td><Td>&nbsp;&nbsp;</Td><td><a href="../gallery/<?php echo $row['image'];?>" class="fancybox" rel="group"><img src="../gallery/t/<?php echo $row['image'];?>"></a></td></tr>
                            <tr><td><b>Status:</b></td><Td>&nbsp;&nbsp;</Td><td><b><?php echo $status;?></b></td></tr>
                            <tr><td><b>Votes:</b></td><Td>&nbsp;&nbsp;</Td><td><b><?php echo $row['votes'];?></b></td></tr>
                            
                            <?php if($row['latitude'] != ''){ ?>
                            <tr><Td colspan="3"><Br><Br></Td></tr>
                            <tr><td valign="top"><b>Map:</b></td><Td>&nbsp;&nbsp;</Td><td><img src='http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $row['latitude'] . ','. $row['longitude'] ;?>&zoom=14&size=400x300&sensor=false'></td></tr>
                            <?php } ?>
                 
                            </table>
						</fieldset>
                        
                        
						
						<div class="clear"></div>
				</div>
 				
                <footer>
				<div class="submit_link">
					<form method="post" action="new_d.php?user=<?php echo $user;?>">
					<input type="submit" value="Approve" name="approve" id="submit_answer" class="alt_btn">
					<input type="submit" value="Disapprove" name="disapprove">
                    </form>
				</div>
                
                </footer>
		</article><!-- end of post new article -->
		
		
		<div class="clear"></div>		
		
		
		
        
       
			
            
            <div class="spacer"></div>
	</section>


</body>

</html>
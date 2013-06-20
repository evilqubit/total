<?php include "includes/header.php";?>

<?php

$remove = 0;

include "php/users_remove.php";


$n = 0;
$i = 0;

if (isset($_POST['$i']) != 0)
{
	$i = $_POST['i'];
}

if (isset($_POST['submit_page']))
{
	$y = $_POST['y'];
	$i = ($y * 50) - 50;
}
$count = $i;
if($i != 0 )
{
	$page = $i;
}
else
{
	$page = 0;
}

$dbs = "SELECT * FROM users";
$extractx = mysql_query ($dbs);
$numrows = mysql_num_rows ($extractx);


$db = "SELECT * FROM users ORDER BY id DESC LIMIT $i, 50";
$extract = mysql_query ($db);

?>
	<section id="main" class="column">	
		
		<div id="delete_message"></div>
        
        <?php if ($remove == 1)
		{ echo '<h4 class="alert_success" style="display:block">User Deleted Successfully!</h4>'; }
		if (isset($_GET['done']) && ($_GET['done'] == "1"))
		{echo '<h4 class="alert_success" style="display:block">Done Successfully!</h4>';}
		if (isset($_GET['done']) && ($_GET['done'] == "0"))
		{echo '<h4 class="alert_error" style="display:block">An Error Just Occurred Please Try Again!</h4>';}
		?>
        
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved"><?php echo $numrows;?> Users</h3>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr>
    				<th>#</th>
                    <th>FB</th>
    				<th>Name</th>
    				<th>Email</th>
                    <th>Date of Birth</th>
                    <th>Date of Registration</th>
                    <th></th>
				</tr> 
			</thead> 
			<tbody> 
            <?php

			while ($row = mysql_fetch_array($extract))
			{
			?>
				<tr>
    				<td><?php echo $count += 1;?></td>
                    <Td><a target="_blank" href="http://www.facebook.com/<?php echo $row['id'];?>"><img src="http://graph.facebook.com/<?php echo $row['id'];?>/picture" border="0"></a></Td>
					
    				<td><?php echo $row['name'];?></td>
    				<td><?php echo $row['email'];?></td>
                    <td><?php echo $row['dob'];?></td>
                    <td><?php echo $row['date'];?></td>
                    
                    
    				<td>                    
                    <form method="post" action="users.php">
                    <input type="hidden" value="<?php echo $row['id'];?>" name="user">
                    <input name="remove_user" type="submit" value="" style="background-image:url(images/icn_trash.png); background-repeat:no-repeat; background-color:transparent; border:none; width:16px; height:14px;" src="images/icn_trash.png" title="Trash" onClick="if (confirm('Do you want to delete this user?') == false) return false; ">
                    </form></td>
				</tr> 
			<?php
			}
			?>
			</tbody> 
			</table>
            
            
            <!-- paging -->
             <table align="center" width="110px" style="color:#000000"><tr align="center">
        <?php
	$y = ($i + 50) /50;
	
	$total = $numrows;
	
	$x = ceil($total / 50);

	//first page..
	if ($y == 1)
	{
		$y = 0;
		$count = 1;
		
		$lim = 4;
		
		while ( ($count < $lim) && ($y < $x) )
		{
			
			$y += 1;
			$count += 1;?>
		<form name="poll_page" action="users.php" method="post">
		<td width="30px" align="center"><b><input type="hidden" value="<?php echo $y;?>" name="y" />
        <input width="30px" type="submit" name="submit_page" style="text-align:center; background-color:transparent; border:none; color:#000000; cursor:pointer; text-decoration: <?php if($y == 1){ echo'underline'; } else{ echo 'none';}?>" value="<?php echo $y;?>"></b></td>
        </form>
	<?php 
		}
	}
	//second or next page...
	else
	{
		if( ( $y - 1) >= 1)
		{
			if ( (($y - 2) >= 1) && ($y == $x ) )
			{
			?>
            <form name="poll_page" action="users.php" method="post">
			<td width="30px">
       		<input type="hidden" value="<?php echo ($y- 2);?>" name="y" />
			<input width="30px" type="submit" name="submit_page" style="cursor:pointer; background-color:transparent; border:none; color:#000000; text-align:center" value="<?php echo ($y - 2);?>"></td>
        </form>
            <?php
			}
			
			?>
        	<form name="poll_page" action="users.php" method="post">
			<td width="30px">
       		<input type="hidden" value="<?php echo ($y - 1);?>" name="y" />
			<input width="30px" type="submit" name="submit_page" style="cursor:pointer; background-color:transparent; border:none; color:#000000; text-align:center" value=" <?php echo ($y -1);?>"></td>
        </form>
	<?php
			
		}
		
		?>
        
        <form name="poll_page" action="users.php" method="post">
			<td width="30px">
       		<input type="hidden" value="<?php echo $y;?>" name="y" />
			<input width="30px" type="submit" name="submit_page" style="cursor:pointer; background-color:transparent; border:none; color:#000000; text-decoration:underline; text-align:center" value="<?php
		 echo $y;?>"></td>
        </form>
        <?php
		
		if($new != 1)
		{
			if ( ($y + 1) <= $x)
			{
				?>
				<form name="poll_page" action="users.php" method="post">
				<td width="30px" >
				<input type="hidden" value="<?php echo ($y+ 1);?>" name="y" />
				<input width="30px" type="submit" name="submit_page" style="cursor:pointer; background-color:transparent; border:none; color:#000000; text-align:center" value="<?php echo ($y + 1);?>"></td>
			</form>
				<?php
			}
		}
	}
	
	?><td><span style="color:#000000; font-size:">of</span></td>
	<form name="poll_page" action="users.php" method="post">
    <td width="30px">

    <input type="hidden" value="<?php echo ($x);?>" name="y" />
    <input width="30px" type="submit" name="submit_page" style="cursor:pointer; background-color:transparent; border:none; color:#000000; text-align:center" value="<?php echo $x;?>"></td>
    </form>

    </tr></table>
			</div><!-- end of #tab1 -->
			
			
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		
		<div class="clear"></div>		
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>
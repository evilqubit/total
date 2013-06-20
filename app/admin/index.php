<?php include "includes/header.php";?>
<?php include "php/login.php";?>

	<section id="main" class="column">
		

		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">Wrong Username or Password</h4>
		
		<h4 class="alert_success">A Success Message</h4>
		
		<input type="hidden" value="<?php echo $error;?>" id="myerror">
		<div class="clear"></div>
		<Br><Br>
        
        <form method="post" action="index.php">
		<article class="module width_index">
			<header><h3>Sign In</h3></header>
				<div class="module_content" >
						<fieldset>
							<label>Username</label>
							<input type="text" name="myusername" id="myusername">
						</fieldset>
						<fieldset>
							<label>Password</label>
							<input type="password" name="mypassword" id="mypassword">
						</fieldset>
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" name="login_admin" value="Sign in" class="alt_btn">
					<input type="reset" value="Reset">
				</div>
			</footer>
		</article></form><!-- end of post new article -->
		
		
		
		
		<div class="spacer"></div>
	</section>

<script>
$("window").ready(function(e) {
    var errorval = $('#myerror').val();
	if (errorval == '1'){
		$('.alert_error').css({"display":"block"});
	}
});
</script>
</body>

</html>
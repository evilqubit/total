<?php include "includes/header.php";?>


	<section id="main" class="column">

		<div id="result"></div>
		
		
		<div class="clear"></div>
		<br><Br>
        

		<article class="module width_index">
	<header><h3>Change Username</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Username</label>
							<input type="text" name="username" id="username">
						</fieldset>
						<fieldset>
							<label>new Username</label>
							<input type="text" name="newusername" id="newusername">
						</fieldset>
                        <fieldset>
							<label>password</label>
							<input type="password" name="password" id="password">
						</fieldset>						
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" onClick="changeusername()" value="Change" class="alt_btn">
				</div>
			</footer>
		</article><!-- end of post new article -->
        
        

		<div class="spacer"></div>
        
        <div id="result2"></div><Br><Bt>
     
		<article class="module width_index">
	<header><h3>Change Password</h3></header>
				<div class="module_content">
               			<fieldset>
							<label>Username</label>
							<input type="text" name="username2" id="username2">
						</fieldset>
						<fieldset>
							<label>Password</label>
							<input type="password" name="password2" id="password2">
						</fieldset>
						<fieldset>
							<label>new Password</label>
							<input type="password" name="newpassword" id="newpassword">
						</fieldset>
                        <fieldset>
							<label>reWrite Password</label>
							<input type="password" name="repassword" id="repassword">
						</fieldset>						
						
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Change" onClick="changepassword()" class="alt_btn">
				</div>
			</footer>
		</article>
		
		<div class="spacer"></div>
	</section>


</body>

</html>
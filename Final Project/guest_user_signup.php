<?php
	include 'controllers/GuestController.php';
	include 'main_header.php';
?>
<style>
body {
  background-color: linen;
}

fieldset {
    display: block;
    margin-inline-start: 350px;
    margin-inline-end: 350px;
    padding-block-start: 150px;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 150px;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
}
</style>
<fieldset>
	<script src="js/signup.js"></script>
	<h1 align ="center">Guest User Sign Up</h1>
	<h5><?php echo $err_db;?></h5>
	
	<form action="" onsubmit= "return validate()" method="post">
		<table align ="center">
			<tr>
				<td>
					Name
				</td>
				
				<td>
					<input type="text" id="name" name="name" value="<?php echo $name;?>">
					<span id="err_name"><?php echo $err_name;?></span>
				</td>			
			</tr>
			
			<tr>
				<td>
					Username
				</td> 
				<td>
					<input type="text" id= "uname"  name="uname" onfocusout="checkUsername(this)" value="<?php echo $uname;?>">
					<span id="err_uname"><?php echo $err_uname;?></span>
				</td>
			</tr>
			
			<tr>
				<td>
					Email
				</td> 
				<td>
					<input type="text" id = "email" name="email"  value="<?php echo $email;?>">
					<span id="err_email"><?php echo $err_email;?></span>
				</td>
			</tr>
			
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" id = "pass" name="pass" value="<?php echo $pass;?>">
					<span id="err_pass"><?php echo $err_pass;?></span>
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" name="sign_up" value="Sign Up">
				</td>
			</tr>
			
		</table>
	</form>
	<h4 align = "center">Already registered <a href="guest_login.php" > Login</a></h4>

<?php include 'main_footer.php';?>
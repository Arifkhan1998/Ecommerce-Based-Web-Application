<?php include 'main_header.php';?>

<?php
	include 'controllers/customerController.php';
?>
<script src="js/signup.js"></script>

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



	<h1 align ="center">Customer Sign Up</h1>
	<h5><?php echo $err_db;?></h5>
	<!-- <form action="" onsubmit= "return validate()" method="post"> -->
	
	<form action="" method="post">
		<table align ="center">
			<tr>
				<td>
					Name
				</td>
				
				<td>
					<input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span>
				</td>
				
			</tr>
			<tr>
				<td>
					Username
				</td> 
				<td>
					<input type="text"  name="uname" value="<?php echo $uname;?>">
					<span id="err_uname"><?php echo $err_uname;?></span>
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td> 
				<td>
					<input type="text" name="email"  value="<?php echo $email;?>">
					<span id="err_email"><?php echo $err_email;?></span>
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="pass" value="<?php echo $pass;?>">
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
	<h4 align = "center">already have a account? <a href="customer_login.php" > Log in</a></h4>
</fieldset>


<!--sign up ends -->
<?php include 'main_footer.php';?>
<?php include 'main_header.php';
	  include 'controllers/UserController.php';
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

	<h1 align = "center">
		Admin Login
	</h1>
	<h5><?php echo $err_db;?></h5>
	<form action="" method="post">
	<table align = "center">
		<tr>
			<td>Username</td> 
			<td>
			<input type="text" name="uname" value="<?php echo $uname;?>">
			<span><?php echo $err_uname;?></span>
			<td>
		</tr>
		<tr>
			<td>Password</td> 
			<td>
			<input type="password" name="pass">
			<span><?php echo $err_pass;?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btn_login" value="Login">
			</td>
		</tr>
			
			
		
	</table>
	
	</form>
	<h4 align = "center">Not registered yet? <a href="signup.php" > Sign Up</a></h4>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>
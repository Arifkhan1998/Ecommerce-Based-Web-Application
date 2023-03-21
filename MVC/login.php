<?php include 'main_header.php';
	  include 'controllers/UserController.php';
?>

	<h1 align = "center">
		Login
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
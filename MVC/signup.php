<?php include 'main_header.php';?>

<?php
	include 'controllers/UserController.php';
?>



	<h1 align ="center">Sign Up</h1>
	<h5><?php echo $err_db;?></h5>
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


<!--sign up ends -->
<?php include 'main_footer.php';?>
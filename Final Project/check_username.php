<?php
	include 'controllers/GuestController.php';
	$uname = $_GET["uname"];
	$user = checkUsername($uname);
	if($user){
		echo "invalid";
	}
	else echo "valid";
?>
<style>
	body {
  background-color: linen;
}
	</style>
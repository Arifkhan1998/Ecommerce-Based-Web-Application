 <?php include 'controllers/customerController.php';
 include 'guest_header.php';
 //$products = getProducts();
	$id = $_GET["id"];
	$c = getCustomer($id);
	
	
?>
<style>
	body {
  background-color: linen;
}
	</style>


<h5><?php echo $db_err;?></h5>
<form action="" method="post">
	
	Name:
		<input type="hidden" value="<?php echo $id?>" name="id">
		<input type="text" name="name" value="<?php echo $c["name"];?>" >
		<span><?php echo $err_name;?></span>
	
	
		
		<input type="submit" name="edit_customer" value="Edit Customer">
	
</form>


<?php include 'admin_footer.php';?>
 <?php include 'controllers/ProductController.php';
 include 'admin_header.php';
 
	$id = $_GET["id"];
	$c = getProduct($id);
	
	
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
	
	
		
		<input type="submit" name="delete_product" value="Delete">
	
</form>


<?php include 'admin_footer.php';?>
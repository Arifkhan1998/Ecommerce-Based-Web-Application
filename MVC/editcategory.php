<?php include 'admin_header.php';
	include 'controllers/CategoryController.php';
	$id = $_GET["id"];
	$c = getCategory($id);
?>


<h5><?php echo $db_err;?></h5>
<form action="" method="post">
	
	Name:
		<input type="hidden" value="<?php echo $id?>" name="id">
		<input type="text" name="name" value="<?php echo $c["name"];?>" >
		<span><?php echo $err_name;?></span>
	
	
		
		<input type="submit" name="edit_category" value="Edit Category">
	
</form>


<?php include 'admin_footer.php';?>
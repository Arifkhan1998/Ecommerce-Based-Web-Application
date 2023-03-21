<?php include 'admin_header.php';
	  include 'controllers/CategoryController.php';
?>

	
		<h5><?php echo $db_err;?></h5>
		<form method="post" action="">
		<table>
			<tr>
				<td>
					Name:
				</td>
				<td>
					<input type="text" name="name" class="form-control">
					<span><?php echo $err_name;?></span>
				</td>
			
			<div class="form-group text-center">
				
				<input type="submit" name="add_category"  value="Add Category" >
			</div>
		</form>


<!--addproduct ends -->
<?php include 'admin_footer.php';?>
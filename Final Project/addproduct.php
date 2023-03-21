<?php session_start();
 if(!isset ($_SESSION["loggeduser"])){
	header ("Location: login.php");
} include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	require_once 'controllers/CategoryController.php';
	require_once 'controllers/BrandController.php';
	$categories = getAllCategories();
	$brands=getAllBrands();
?>
<style>
	body {
  background-color: linen;
}
	</style>


	<h5><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data">
		<table align= "center">
			<tr>
				<td>
					Name:
				</td>
				
				<td>
					<input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span>
	
				</td>
			</tr>
		
			<tr>
				<td>
					Category:
				</td>
				
				<td>
					<select name="c_id" class="form-control">
						<option disabled selected>Choose</option>
						<?php
							foreach($categories as $c){
								echo '<option value="'.$c["id"].'">'.$c["name"].'</option>';
							}
						?>
					</select><span><?php echo $err_cat;?></span>
				</td>
			</tr>
			
			
			
			<tr>
				<td>
					Price:
				</td>
				<td>
					<input type="text" name="price" value="<?php echo $price;?>">
					<span><?php echo $err_price;?></span>
	
				</td>
			</tr>
			<tr>
				<td>
					Quantity:
				</td>
				
				<td>
					<input type="text" name="qty" value="<?php echo $qty;?>">
					<span><?php echo $err_qty;?></span>
	
				</td>
			</tr>
			<tr>
				<td>
					Description:
				</td>
				<td>
					<textarea type="text" name="desc" value="<?php echo $desc;?>"></textarea>
					<span><?php echo $err_desc;?></span>
				</td>
			</tr>
			<tr>
				<td>
					Image
				</td>
				<td>
					<input type="file" name="p_image">
				</td>
			</tr>
			
			<tr>
				<td>
					Brand:
				</td>
				
				<td>
					<select name="brand_id" class="form-control">
						<option disabled selected>Choose</option>
						<?php
							foreach($brands as $b){
								echo '<option value="'.$b["id"].'">'.$b["name"].'</option>';
							}
						?>
					</select><span><?php echo $err_brand;?></span>
				</td>
			</tr>
			<tr>
				<td>
				<input type="submit" name="add_product" value="Add Product" align= "right">
				</td>
				
				<td>
					
				</td>
			</tr>
		</table>
	</form>

<?php include 'admin_footer.php';?>
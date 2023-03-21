<?php include 'admin_header.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/ProductController.php';
//require_once ='controllers/orderController.php';
$id=$_GET["id"];
$p = getProduct($id);?>
<style>
	body {
  background-color: linen;
}
	</style>



<!--editproduct starts -->
<tr class="center">
<table>
	
	<div>
		<form>
			<tr>
				<td>Name:</td> 
				<td><?php echo $p["name"] ;?></td>
			</tr>
			
			<tr>
				<td>Category:</td> 
				<td><?php$p["c_name"].?.$p["id"];?></td>
			</tr>
			
			<tr>
				<td>Brand:</td> 
			</tr>
			
			<tr>
				<td class="text">Price:</td> 
				<td><?php echo $p["price"] ;?></td>
			</tr>
			
			<tr>
				<td class="text">Quantity:</td> 
				<td><?php echo $p["qty"] ;?></td>
			</tr>
			
			<tr>
				<td>Description:</td> 
				<td><?php echo $p["description"] ;?></td>
			</tr>
			
			<tr>
				<td>Image</td> 
				<td><img src= "<?php $p["img"];?>" ></td>
				
			</tr>
			<tr>
				
				<input type="submit" class="btn btn-success" value="Order now" name= "order_now">
			</tr>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>
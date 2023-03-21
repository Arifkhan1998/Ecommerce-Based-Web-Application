<?php include 'guest_header.php';
	require_once 'controllers/ProductController.php';
	$products = getProductsBrand();
?>
<style>
	body {
  background-color: linen;
}
	</style>
<!--All Products starts -->

<script src="js/products.js"></script>
<div class="center">
	<h3 class="text">Selected Brand Products</h3>
	<input type="text" class="form-control" onkeyup="search(this)" placeholder="Search..." >
	<div id="suggestions">
	</div>
	<table class="table table-striped">
		<thead>
			<th>Serial</th>
			<th></th>
			<th> Name</th>
			<th>Price </th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
		
			<?php
				$i=1;
				foreach($products as $p){
					echo "<tr>";
						
						echo "<td>$i</td>";
						echo "<td><img src='".$p["img"]."' width='100px' height='100px'></td>";
						echo "<td>".$p["name"]."</td>";
						//echo "<td>".$p["c_name"]."</td>";
						echo "<td>".$p["price"]."</td>";
						echo "<td>".$p["qty"]."</td>";
						echo '<td><a href="cart.php?id='.$p["id"].'" class="btn btn-success">Add to cart</a></td>';
						//echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>
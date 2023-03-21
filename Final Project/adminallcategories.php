<?php session_start();
 if(!isset ($_SESSION["loggeduser"])){
	header ("Location: login.php");
} 
include 'admin_header.php';
	include 'controllers/CategoryController.php';
	
	$categories = getAllCategories();
?>
<style>
	body {
  background-color: linen;
}
	</style>
<!--All Categories starts -->

<div>
	<h3 class="text">All Categories</h3>
	<table >
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<!--<th>Product Count </th>-->
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="editcategory.php?id='.$c["id"].'" class="btn btn-success">Edit</a></td>';
						echo '<td><a href="deletecategory.php?id='.$c["id"].'" class="btn btn-success">Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>
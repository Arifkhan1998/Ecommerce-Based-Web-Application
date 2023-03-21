<?php 
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 60, "/"); 

include 'guest_header.php';
	include 'controllers/CategoryController.php';
	
	$categories = getAllCategories();
?>
<style>
	body {
  background-color: linen;
}
	</style>

<div>
	<h3 align ="center">All Categories</h3>
	<table align ="center">
		<!--<thead>
			<th>SN<th>
			<th> Name</th>
			<th></th>
			<th></th>
			
		</thead>-->
		<tbody>
			<?php
				$i=1;
				foreach($categories as $c){
					echo "<tr>";
						//echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="filtercategory.php?id='.$c["id"].'" class="btn btn-success">Check out</a></td>';
						//echo '<td><a>Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>

<?php include 'guest_footer.php';?>
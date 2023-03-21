<?php include 'guest_header.php';
	include 'controllers/BrandController.php';
	
	$brands = getAllBrands();
?>
<style>
	body {
  background-color: linen;
}
	</style>

<div>
	<h3 align ="center">All brands</h3>
	<table align ="center">

		<tbody>
			<?php
				$i=1;
				foreach($brands as $c){
					echo "<tr>";
						//echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo '<td><a href="filterbrand.php?id='.$c["id"].'" class="btn btn-success">Check out</a></td>';
						//echo '<td><a>Delete</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>

<?php include 'guest_footer.php';?>
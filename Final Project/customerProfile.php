<?php include 'guest_header.php';
	include 'controllers/customerController.php';
	//$id = $_GET["id"];
	$customer = getCustomers();
?>
<style>
	body {
  background-color: linen;
}
	</style>
<!--All Categories starts -->

<div>
	<h3 class="text">Customer Profile</h3>
	<table >
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Username </th>
			<th>Email</th>
			<th>Password</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($customer as $c){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]."</td>";
						echo "<td>".$c["username"]."</td>";
						echo "<td>".$c["email"]."</td>";
						echo "<td>".$c["password"]."</td>";
						echo '<td><a href="edit_customer.php?id='.$c["id"].'" class="btn btn-success">Update Profile</a></td>';
						echo '<td><a href="deleteProfile.php?id='.$c["id"].'" class="btn btn-success">Log Out</a></td>';
						//echo '<td><a>Log out</a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>
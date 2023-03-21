<?php include 'admin_header.php';?>

<form>
	<table align ="center">
		<tr>
			<td>Name:</td> 
			<td><input type="text"></td>
		</tr>
	<tr>
		<td>Category:</td> 
		<td>
			<select class="form-control">
				<option>Choose</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Price:</td> 
		<td><input type="text"></td>
	</tr>
	<tr>
		<td>Quantity:</td> 
		<td><input type="text"></td>
	</tr>
	<tr>
		<td>Description:</td> 
		<td><textarea type="text" class="form-control"></textarea></td>
	</tr>
	<tr>
		<td>Image</td> 
		<td><input type="file" class="form-control"></td>
	</tr>
	<tr>
		
		<td><input type="submit" class="btn btn-success" value="Edit Product" class="form-control"></td>
	</tr>
</form>


<?php include 'admin_footer.php';?>
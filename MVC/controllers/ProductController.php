<?php
	require_once "models/db_config.php";
	$name="";
	$err_name="";
	$price="";
	$err_price="";
	$qty="";
	$err_qty="";
	$desc="";
	$err_desc="";
	//validation varables
	$err_db="";
	if(isset($_POST["add_product"])){
		if($_POST["name"]=""){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		
		if(empty($_POST["price"])){
			$err_price="Price Required";
			$hasError=true;
		}else{
			$price=$_POST["price"];
		}
		if(empty($_POST["qty"])){
			$err_qty="Quantity Required";
			$hasError=true;
		}else{
			$qty=$_POST["qty"];
		}
		if(empty($_POST["desc"])){
			$err_desc="Description Required";
			$hasError=true;
		}else{
			$desc=$_POST["desc"];
		}
		//do validations
		//if no error
		$fileType = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["p_image"]["tmp_name"],$file);
		
		$rs = insertProduct($name,$_POST["c_id"],$price,$qty,$desc,$file);
		if($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;
		
	}
	
	function insertProduct($name,$c_id,$price,$qty,$desc,$img){
		$query = "insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
		return execute($query);
	}
	function updateProduct($name,$c_id,$price,$qty,$desc,$img,$id){
		$query = "update products set name='$name', c_id=$c_id, price=$price, qty=$qty, description='$desc' where id=$id";
		return execute($query);
	}
	function deleteProduct(){
		
	}
	function getProducts(){
		$query ="select p.*,c.name as 'c_name' from products p left join categories c on c.id = p.c_id";
		$rs = get($query);
		return $rs;
	}
	function getProduct($id){
		$query = "select * from products where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	function search($key){
		$query = "select p.id,p.name from products p left join categories c on c.id = p.c_id where p.name like '%$key%' or c.name like '%$key%'";
		$rs = get($query);
		return $rs;
	}
?>
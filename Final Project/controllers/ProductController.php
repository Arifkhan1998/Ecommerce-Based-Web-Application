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
	$cat="";
	$err_cat="";
	$brand="";
	$err_brand="";
	$db_err="";
	//validation varables
	$err_db="";
	if(isset($_POST["add_product"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		
		if(!isset($_POST["c_id"])){
			$err_cat = "Category Required";
			$hasError = true;
		}
		else{
			$cat = $_POST["c_id"];
		}
		
		if(!isset($_POST["brand_id"])){
			$err_brand = "Brand Required";
			$hasError = true;
		}
		else{
			$brand = $_POST["brand_id"];
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
		
		if(!$hasError){
		$rs = insertProduct($name,$_POST["c_id"],$price,$qty,$desc,$file,$_POST["brand_id"]);
		if($rs === true){
			header("Location: allproducts.php");
		}
		$err_db = $rs;}
		
	}
	
	else if (isset($_POST["delete_product"])){
		//validations
		//if no error
		
		$rs = deleteProduct();
		if($rs === true){
			header("Location: adminallproducts.php");
		}
		$db_err = $rs;
	}
	

	function insertProduct($name,$c_id,$price,$qty,$desc,$img,$brand_id){
		$query = "insert into products values (NULL,'$name',$c_id,$price,$qty,'$desc','$img','$brand_id')";
		return execute($query);
	}
	function updateProduct($name,$c_id,$price,$qty,$desc,$img,$id){
		$query = "update products set name='$name', c_id=$c_id, price=$price, qty=$qty, description='$desc' where id=$id";
		return execute($query);
	}

	function getProducts(){
		$query ="SELECT p.*,c.name as c_name ,b.name as b_name FROM `products` p left join categories c on c.id=p.c_id left join brand b on b.id=p.brand_id ";
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
	function getProductsCategory(){
		$id=$_GET['id'];
		$query ="SELECT * FROM `products` WHERE c_id=$id";
		$rs = get($query);
		return $rs;
	}
	function getProductsBrand(){
		$id=$_GET['id'];
		$query ="SELECT * FROM `products` WHERE brand_id=$id";
		$rs = get($query);
		return $rs;
	}
	function deleteProduct(){
		$id= $_GET["id"];
		$query = "DELETE FROM `products` WHERE `id` = $id";
		return execute($query);
	}
	
?>
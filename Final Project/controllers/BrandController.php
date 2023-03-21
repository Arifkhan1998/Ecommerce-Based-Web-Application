<?php
	require_once 'models/db_config.php';
	$db_err="";
	$name="";
	$err_name="";
	if(isset($_POST["add_brand"])){
		//validations
		//if no error
		$rs = insertBrand($_POST["name"]);
		if($rs === true){
			header("Location: adminallbrands.php");
		}
		$db_err = $rs;
	}
	else if (isset($_POST["edit_brand"])){
		//validations
		//if no error
		
		$rs = updateBrand($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: adminallbrands.php");
		}
		$db_err = $rs;
	}
	
	else if (isset($_POST["delete_brand"])){
		//validations
		//if no error
		
		$rs = deleteBrand();
		if($rs === true){
			header("Location: adminallbrands.php");
		}
		$db_err = $rs;
	}
	
	function insertBrand($name){
		$query = "insert into brand values (NULL,'$name')";
		return execute($query);
	}
	function getAllBrands(){
		$query = "select * from brand";
		$rs = get($query);
		return $rs;
	}
	function getBrand($id){
		$query = "select * from brand where id=$id";
		$rs = get($query);
		return $rs[0]; //to pass only 1 instance
	}
	function updateBrand($name,$id){
		$query = "update brand set name= '$name' where id = $id";
		return execute($query);
	}
	function deleteBrand(){
		$id= $_GET["id"];
		$query = "DELETE FROM `brand` WHERE `id` = $id";
		return execute($query);
	}
	
?>

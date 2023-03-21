<?php
require_once 'models/db_config.php';
require_once'controllers/ProductController.php';
include 'controllers/CustomerController.php';

if(isset($_POST["order_now"])){
		$rs = insertOrder($_POST["c_id"],$_POST["customer_id"]);
		if($rs === true){
			header("Location: order.php");
			
		}
		$err_db = $rs;
}
		
		
		function insertOrder(){
		$query = "INSERT INTO `order_table` (`id`, `customer_id`, `product_id`) VALUES (NULL, '4', '22');";
		return execute($query);
		
	}
	
?>
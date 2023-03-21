<?php
require_once 'controllers/CategoryController.php';
require_once 'controllers/ProductController.php';

$id=$_GET["id"];
$p = getProduct($id);

?>
<style>
	body {
  background-color: linen;
}
	</style>
<html>
    <head>
    </head>
        <body>
            <h2>Cart</h2>
            <fieldset>
                <form action="" method="post">
				
                    <table>
					<img src="<?php $p["img"];?>" width='100px' height='100px'>
                        <tr>
                            <td>Product Name: </td>
                            <td><?php echo $p["name"] ;?></td>
                        </tr>
		
						<tr>
                            <td>Available Quantity: </td>
                            <td><?php echo $p["qty"] ;?></td>
                        </tr>
						
						<tr>
                            <td>Product Price: </td>
                            <td><?php echo $p["price"] ;?></td>
                        </tr>
						
						
						
						<tr>
                            <td>Quantity: </td>
                            <td><input type ="text" name = "qt" placeholder= "How much product do you need?"</td>
                        </tr>
        
                        <tr>
                            <td>Product Description:</td>
                            
                        </tr>
                        <tr>
						<td align="right" colspan="2"><a href ="payment.php"><input type="button" value="add"></a></td>
					    </tr>
                      </table>
					  
                
                </form>
            
            </fieldset>
            <h5><a href="allproducts.php">back</a></h5>
        
        </body>


</html>    
              
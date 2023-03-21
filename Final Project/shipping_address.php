<?php
include 'controllers/address_controller.php';

?>
<html>
    <head>
    </head>
        <body>
            <h1 align="center"><b>My Clothing</b></h1>
            <h2>Shipping Address</h2>
            <fieldset>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th colspan="1">Shipping Address:</th>
                        </tr>
                        
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="First Name"></td>
                            <td><span><?php echo $err_name; ?></span></td>
                            
                        </tr>
                        
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" name="phone" value="<?php echo $Phone; ?>" placeholder="Phone Number"></td>
                            <td><span><?php echo $err_Phone; ?></span></td>
                        </tr>
                        <tr>
						<td>Address: </td>
						<td><input type="text" name="address" value="<?php echo $address;?>" placeholder="address"></td>
                            <td><span><?php echo $err_address; ?></span></td>
					</tr>
					
                        
					
                       
                    <tr>
                        <td align="right"></td>    
					    <td><input type="submit" name= "payment" value="Payment"></td>
				    </tr>
                        
                    </table>
                
                </form>
            
            </fieldset>
            <h5><a href="Homepage.php">back</a></h5>
        
        </body>


</html>    
                        
                        
                    
                    
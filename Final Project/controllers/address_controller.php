<?php
   $name="";
   $err_name="";
   $address="";
   $err_address="";
   $Phone="";
   $err_Phone="";
   $email="";
   $err_email="";
   


   $hasError=false;
  

if(isset($_POST["payment"]))
{
    if(empty($_POST["name"]))
    {
        $err_name="Name required";
        $hasError=true;
    }
    else if(strlen($_POST["name"]) <=2 || strlen($_POST["name"])>=15 || !ctype_alpha($_POST["name"]))
    {
        $err_name="First name can't be less than 3 and greater than 15 characters and not numeric";
         $hasError=true;
    }
     else
    {
        $name=htmlspecialchars($_POST["name"]);
    }
    
    if(empty($_POST["phone"]))
    {
        $err_Phone="Phone Number required";
        $hasError=true;
    }
    else if(strlen($_POST["phone"]) <=10 || strlen($_POST["phone"])>=12 || !is_numeric($_POST["phone"]))
    {
        $err_Phone="phone number should be 11 digis and you must enter numeric value";
        $hasError=true;
    }
     else
    {
        $Phone=htmlspecialchars($_POST["phone"]);
    }
     
    if(empty($_POST["address"]))
    {
        $err_address="You must Enter your address";
        $hasError=true;
    }
     else
    {
        $address=htmlspecialchars($_POST["address"]);
    }
    if(!$hasError)
    {
		header("Location: payment.php");
        /*echo $_POST["name"]."<br>";
        echo $_POST["phone"]."<br>";
        echo $_POST["address"]."<br>";*/
    }
        
}
?>
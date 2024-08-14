<?php

session_start();
$cart=$_SESSION['cart'];

if(isset($_GET["btn"]))
{
    if($_GET["btn"]=="Add")
    {
       

        $id=$_GET['id'];
        $qty=$_GET['qty'];
        $_SESSION['cart'][$id]=array('product_qty'=>$qty);
        header('location:myCart1.php');
       
        

        
      
    }
   
}


?>
       



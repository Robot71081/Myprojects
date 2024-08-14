<?php

session_start();
$cart=$_SESSION['cart'];





?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="example.css">
    <?php
    include 'dbconnection.php';
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <img src="product_images/logo.png" alt="" height="70px" width="200px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Cat1.php">Cat1</a></li>
            <li><a class="dropdown-item" href="Cat2.php">Cat2</a></li>
            <li><a class="dropdown-item" href="Cat3.php">Cat3</a></li>
            
            <li><a class="dropdown-item" href="Cat4.php">Cat4</a></li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="feedBack.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myCart1.php">Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkOut.php">Checkout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="myOrders.php">My Orders</a></li>
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="signout.php">Logout</a></li>
          </ul>
        </li>
      
      </form>
    </div>
  </div>
</nav>
<div class="heading" >
                              <b  class="int"> My &nbsp;</b  ><b class="book">Cart. </b>  <br>
                              
                              
  

                                   
        </div>

        <table class="cart" align="center">
        <tr  style="text-align:center;font-size:50px;padding:20px;">
                   <b > <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th></b>
                </tr>
                <?php


include 'dbconnection.php';
$total=0;
foreach($cart as $key=>$value)
    {
          $sql=" SELECT * FROM products WHERE product_id=$key";
          $result=mysqli_query($con,$sql);
          $row=mysqli_fetch_assoc($result);



 ?>
<tr class=" th "  style="text-align:center;font-size:50px;">
    <td><img src="product_images/<?php echo $row['product_image']?>" height="100px" alt=""></td>
    <td class="th "><?php echo $row['product_title']?></td>
    <td><?php echo $row['product_price']?></td>

    <td><?php echo $value['product_qty']?></td>
    <td><?php echo $row['product_price']*$value['product_qty']?></td>
    <td><a href="deletecart.php?id=<?php echo $key;?>">Remove</a></td>
</tr>
<?php
$total=$total+$row['product_price']*$value['product_qty'];
    }
?>


        </table><br>

        <div class="" align="center">



 </div>
 <div class="card" align="center">

     <div class="card-header ">
         Total
     </div>
     <div class="card-body">
         Total amount:INR<?php echo $total;?>.00/-<br>
         <a href="checkOut.php" class="btn btn-success">Checkout</a>

     </div>
 </div>
    



       

      
      
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

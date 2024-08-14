<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="example.css">
    <?php

    session_start();
    include 'dbconnection.php';
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
       $sql = "SELECT * FROM products  WHERE product_id='$product_id'";
       $result = mysqli_query($con, $sql);
     
    $row = mysqli_fetch_assoc($result);
    
    $product_name  = $row['product_title'];
    $product_cat  = $row['product_cat']; 
    $product_price  = $row['product_price'];
    $productd  = $row['productd'];
    $product_image  = $row['product_image'];
    }
   // if(!isset($_SESSION['customer'])&& empty($_SESSION['customer']))
   // {
  //      header('location:signin.php');
  //  }
   
    ?>

    <style>
        .container{
            width:100vw;
            height:100vh;
            color:#feffff;
            background-color: #3aafa9;
            text-align: center;
        justify-content: center;
        }
       
    </style>
   
  
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
                              <b  class="int"> Product &nbsp;</b  ><b class="book">Details. </b>  <br>
                              
                              
  

                                   
        </div>
    



             <div class="" align="center">
                       
                       <img src="product_images/<?php echo $product_image ?>" alt="" class='img-fluid' style='height:400px;width:400px;'>
                       <h3><b><?php echo $product_name ?></b></h3>
       <h2><b>INR <?php echo  $product_price ?>.00 </b></h2>
       <p>     <?php echo $productd ?></p> 
        
                      
                   </div>

             
    

   

   
 
                           
                              
  

                                   
      

      
   
  </div>
 
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

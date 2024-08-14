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
            <li><a class="dropdown-item" href="Cat1.php">Finance</a></li>
            <li><a class="dropdown-item" href="Cat2.php">Science</a></li>
            <li><a class="dropdown-item" href="Cat3.php">Trading</a></li>
            
            <li><a class="dropdown-item" href="Cat4.php">Fitness</a></li>
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
<b  class="int"> Category &nbsp;</b  ><b class="book">Finance. </b>  <br>
                              
                              
  

                                   
        </div>
    



       
       

        <div>

        <?php
             include 'dbconnection.php';
             $product_query = "SELECT * FROM products WHERE   product_cat like '%Finance'";
                $run_query = mysqli_query($con,$product_query);
               

                    while($row = mysqli_fetch_array($run_query)){
                        $product_id    = $row['product_id'];
                        $product_title   = $row['product_title'];
                        $price=$row['product_price'];
                        $prdt_qty=$row['product_qty'];
                        $product_image = $row['product_image'];
                      
                       
                      
                        
                    ?> 
                    
                          <li align="left" class="box">
                        <a href="#"><img src="product_images/<?php echo $row['product_image']?>" alt="failed" height="100px" width="100px"></a>
                        <h4><a href="productsDetails1.php?id=<?php echo  $row["product_id"] ?>"><?php echo $row['product_title']?></a></h4>

                       
                        <div class="price"><?php echo $row['product_price']?> Rs</div>

                        <hr>
                        <form action="mycart.php" method="GET">
                            <input type="hidden" name="id" value="<?php echo $row['product_id'];?>" id="id">
                            <input type="number" name="qty" onKeyDown="return false" id="qty" value="" min="0" max="<?php echo $row['product_qty'];?>" >
                            <?php if ($row['product_qty']=='0') {
                             echo " Out of Stock <input type='submit'  name='btn' value='Add' disabled='true'  />";
                            }else{
                              echo "  <input type='submit'  name='btn' value='Add'  />";
                            }?>
                           
                        </form>
                        <!--<a  href="cart.php" class="btn btn-default btn-xs pull-right" ><i class="fa fa-cart-arrow-down">Add to Cart</i></a>-->
                        
                    </li>

                 

                   <?php
                    };   
                    ?>


      
   
        </div>

      
        
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

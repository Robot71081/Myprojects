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
    include('dbconnection.php');

  //  if(!isset($_SESSION['customer'])&& empty($_SESSION['customer']))
   // {
   //     header('location:signin.php');
 //   }
    
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
      
     
      
      </form>
    </div>
  </div>
</nav>
<div class="heading" >
                              <b  class="int"> Give &nbsp;</b  ><b class="book">Feedback. </b>  <br>
                              
                              
  

                                   
        </div>
                             <div class="" align="center">
                             <form role="form" name="frm" method="POST" action="feedback.php">
                                        <div class="">
                                            <label>Name</label><br>
                                            <input class="" type="text" name="uname" id="uname"/>
                                          
                                        </div>
                                        <div class="">
                                            <label>Email</label><br>
                                            <input class="" type="text"  name="email" id="email"/>
                                            
                                        </div>
                                       <div class="">
                                            <label>Feedback</label><br>
                                           <textarea name="feedback" id="feedback" cols="60" rows="10"></textarea>
                                            
                                        </div>
                                       
                                       
                                   
                                        </div>
                                        <div class="" align="center">
                                        
                                           <input  class="btn btn-success"type="submit" name="submit" value="Submit" id="submit"/>
                                        </div>
                                        </form>
                                  </div>
                
            
        </div>
    </div>
  

                              
                              
  

                                   
        </div>
     





        

    



       

      
      
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

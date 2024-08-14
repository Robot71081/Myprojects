<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="example.css">
    <style>

        
.containers{
display: flex;
flex-direction: row;
text-align: center;
justify-content: center;
}


.item{
 
   width:220px;
   height:200px;
   background-color:#def2f1;
   border:2px solid black;
   box-shadow:5px 5px ;
   
   align-items:center;
  
  
}

h3{
  font-size:40px;
}

.box{
   display: flex;
flex-direction: row;
text-align: center;
justify-content: center;
border:none;
}





</style>
<?php
include('dbconnection.php');


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
          <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
      
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Books
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="vbooks.php">View Books</a></li>
            <li><a class="dropdown-item" href="ibooks.php">Insert Books</a></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vuorders.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vfusers.php">Users</a>
        </li>
      
      </form>
    </div>
  </div>
</nav>
             <div class="heading" >
                              <b  class="int"> My &nbsp;</b  ><b class="book">Dashboard. </b>  <br>
                              
             </div>

             <div class="containers">

                        <div class="item" id="item1">



                            
                            <?php
                                $sql = "SELECT * from orders ";

                                if ($result = mysqli_query($con, $sql)) {
                                
                                    // Return the number of rows in result set
                                    $rowcount = mysqli_num_rows( $result );
                                ?>    
                            <h3>   <?php   // Display result
                                    echo(" Orders<br>");?>
                                    <hr>
                                <?php echo $rowcount;
                                } 
                                ?></h3> 
                        
                        </div>

                        <div class="item" id="item1">
                                
                                <?php
                                    $sql = "SELECT * FROM `ordertrack` WHERE status='Inprogress' ";
        
                                    if ($result = mysqli_query($con, $sql)) {
                                    
                                        // Return the number of rows in result set
                                        $rowcount = mysqli_num_rows( $result );
                                    ?>    
                                 <h3>   <?php   // Display result
                                        echo("Inprogress<br>");?>
                                        <hr>
                                       <?php echo $rowcount;
                                    } 
                                    ?></h3> 
                            </div>

                            <div class="item" id="item2">
                                
                            <?php
                                    $sql = "SELECT * FROM `ordertrack` WHERE status='Dispatched' ";

                                    if ($result = mysqli_query($con, $sql)) {
                                    
                                        // Return the number of rows in result set
                                        $rowcount = mysqli_num_rows( $result );
                                    ?>    
                                <h3>   <?php   // Display result
                                        echo("Dispatched<br>");?>
                                        <hr>
                                    <?php echo $rowcount;
                                    } 
                                    ?></h3> 
                            </div>
                            <div class="item" id="item3">
                                    
                                <?php
                                    $sql = "SELECT * FROM `ordertrack` WHERE status='Delivered' ";

                                    if ($result = mysqli_query($con, $sql)) {
                                    
                                        // Return the number of rows in result set
                                        $rowcount = mysqli_num_rows( $result );
                                    ?>    
                                <h3>   <?php   // Display result
                                        echo("Delivered<br>");?>
                                        <hr>
                                    <?php echo $rowcount;
                                    } 
                                    ?></h3> 
                            </div>
                                    <div class="item" id="item4">
                                        
                                    <?php
                                            $sql = "SELECT * FROM `ordertrack` WHERE status='Cancelled' ";

                                            if ($result = mysqli_query($con, $sql)) {
                                            
                                                // Return the number of rows in result set
                                                $rowcount = mysqli_num_rows( $result );
                                            ?>    
                                        <h3>   <?php   // Display result
                                                echo(" Cancelled<br>");?>
                                                <hr>
                                            <?php echo $rowcount;
                                            } 
                                            ?></h3> 
                                    </div>
                                    </div><br>



<div class="containers">
<div class="item" id="item1">



    
<?php
   $sql = "SELECT * from products ";

   if ($result = mysqli_query($con, $sql)) {
   
       // Return the number of rows in result set
       $rowcount = mysqli_num_rows( $result );
   ?>    
<h3>   <?php   // Display result
       echo(" Books<br>");?>
       <hr>
      <?php echo $rowcount;
   } 
   ?></h3> 

</div>
<div class="item" id="item1">
       
<?php
   $sql = "SELECT * FROM `products` WHERE product_cat LIKE '%Finance%' ";

   if ($result = mysqli_query($con, $sql)) {
   
       // Return the number of rows in result set
       $rowcount = mysqli_num_rows( $result );
   ?>    
<h3>   <?php   // Display result
       echo("Finance<br>");?>
       <hr>
      <?php echo $rowcount;
   } 
   ?></h3> 
</div>
<div class="item" id="item2">
  
<?php
  $sql = "SELECT * FROM `products` WHERE product_cat LIKE '%Science%' ";

   if ($result = mysqli_query($con, $sql)) {
   
       // Return the number of rows in result set
       $rowcount = mysqli_num_rows( $result );
   ?>    
<h3>   <?php   // Display result
       echo("Science<br>");?>
       <hr>
      <?php echo $rowcount;
   } 
   ?></h3> 
</div>
<div class="item" id="item3">
    
<?php
   $sql = "SELECT * FROM `products` WHERE product_cat LIKE '%Trading%' ";

   if ($result = mysqli_query($con, $sql)) {
   
       // Return the number of rows in result set
       $rowcount = mysqli_num_rows( $result );
   ?>    
<h3>   <?php   // Display result
       echo("Trading<br>");?>
       <hr>
      <?php echo $rowcount;
   } 
   ?></h3> 
</div>
<div class="item" id="item4">
  
<?php
    $sql = "SELECT * FROM `products` WHERE product_cat LIKE '%Fitness%' ";

   if ($result = mysqli_query($con, $sql)) {
   
       // Return the number of rows in result set
       $rowcount = mysqli_num_rows( $result );
   ?>    
<h3>   <?php   // Display result
       echo(" Fitness<br>");?>
       <hr>
      <?php echo $rowcount;
   } 
   ?></h3> 
</div>


                                </div>
<br>
<p align="center">&copy; Bookish 2024</p>


</div>


                     
    



            

             
    

   

   
 
                           
                              
  

                                   
      

      
   
  </div>
 
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

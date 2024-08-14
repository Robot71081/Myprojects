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
   
    $sqry = "SELECT orders.totalprice, orders.orderstatus, orders.paymentmode, orders.timestamp, orders.id, user_data.firstname, user_data.lastname 
     FROM orders JOIN user_data ON orders.userid=user_data.userid ORDER BY `orders`.`id` DESC    ";
$result=mysqli_query($con,$sqry);

   
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
                              <b  class="int"> View &nbsp;</b  ><b class="book">Orders. </b>  <br>
                              
             </div>
           
                    
                                        <table align="center"class="table  table-hover" style="text-align:center;width:80%" id="myTable">
                                        
                    
                                            <thead>
                                                    <tr>
                                                    <th>Customer Name</th>
                                                       
                                                      
                                                        <th>Total price</th>
                                                        <th>Order Status</th>
                                                        <th>Payment mode</th>
                                                        
                                                       
                                                      
                                                        <th>Order placed on</th>
                                                        <th>Operations</th>
                                                        
                                                        
                                                    </tr>
                                            </thead>
                                            <tbody>
                                            <?php
    

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            ?>
      
        <tr>
            <td><?php echo $row["firstname"] ." ".$row["lastname"] ?></td>
            <td><?php echo $row["totalprice"] ?></td>
            <td><?php echo $row["orderstatus"] ?></td>
            <td><?php echo $row["paymentmode"] ?></td>
            <td><?php echo $row["timestamp"];  ?>		</td>
            
            <td><a href='orderprocess1.php?id=<?php echo $row["id"] ?>'>Change Status</a> 
            
        </tr>

        
        <?php
        }
      } else {
        echo "0 results";
      }


?>
                                            </tbody>
                                        </table>

                                       
                                  
  
                            
             
             
                                      
                                      
                                  
                                 
                                     

                                      
        
                    
                
                 

            
<br>
<p align="center">&copy; Bookish 2024</p>


</div>


                     
    



            

             
    

   

   
 
                           
                              
  

                                   
      

      
   
  </div>
 
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

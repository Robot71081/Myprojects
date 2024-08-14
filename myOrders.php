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

   if(!isset($_SESSION['customer'])&& empty($_SESSION['customer']))
    {
    header('location:login.php');
    }
    
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
                              <b  class="int"> My &nbsp;</b  ><b class="book">Orders. </b>  <br>
                              
                              
  

                                   
        </div>
                             <table align="center" style="font-size:30px;text-align:center;">
                                                    <thead>
                                <tr>
                                  <th>Total Price</th>
                                  <th>Order Status</th>
                                  <th>Paymentmode</th>
                                  <th>Date and Time</th>
                                  <th>View Orders</th>
                                              <th>Cancel Order</th>
                                </tr>
                                <hr>
                              </thead>
                              
                              <tbody >
				<?php
				$c_id = $_SESSION['customerid'];

 
  
				$sql = "SELECT * FROM orders WHERE userid='$c_id'";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
				 // output data of each row
				 while($row = mysqli_fetch_assoc($result)) {
 			?>
					<tr>
           
						<td>
							<?php echo $row["totalprice"] ?>
						</td>
						<td>
						<?php echo $row["orderstatus"] ?>
						</td>
						<td>
						<?php echo $row["paymentmode"] ?>		
						</td>
						<td>
						

						<?php echo $row["timestamp"] ?>		
						</td>
						<td>
							<a href="vorders.php?id=<?php echo $row["id"]?>">view</a>
						</td>
                        <td>
							<a href="corders.php?id=<?php echo $row["id"]?>">cancel</a>
						</td>
					</tr>
				 
			
			<?php
				}
			   } else {
				 echo "0 results";
			   }
			 
			 
			 ?>




				
				</tbody>
                              </table>
                              </div>
                              
                              
  

                                   
        </div>
     
<div class="con" align="center">
      
		
	
</div>

</div>


        

    



       

      
      
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

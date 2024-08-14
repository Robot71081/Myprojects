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

  
    $total="";

    $message  = '';


     //echo $_SESSION['customer']."<BR>";
    // echo $_SESSION['customerid']."<BR>";
    if(isset($_POST['submit']))
   {
       
	 
       
       $orderid = $_POST['orderid'];
        $reason = $_POST['reason'];
       $status=$_POST['status'];
   $inscancel="insert into ordertrack(orderid,status,reason) values('$orderid','$status','$reason')";
                
   if(mysqli_query($con, $inscancel)){
    $up_sql = "UPDATE orders SET orderstatus='$status'  WHERE id=$orderid";
mysqli_query($con, $up_sql);
header('location:vuorders.php');

}
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
                              <b  class="int"> Order &nbsp;</b  ><b class="book">Status </b>  <br>
                              
             </div>
<form action="" method="post">
             <table class=" table table-bordered bg-white text-dark" align="center"style="text-align:center;width:80%" >
				<thead>
					<tr>
						<th>Product</th>
						<th>Price</th>
						<th>Status</th>
						<th>Payment mode</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php
				// $c_id = $_SESSION['customerid'];

 if(isset($_GET['id'])){
     $o_id = $_GET['id'];
 }


 
  
				$sql = "SELECT * FROM orders WHERE id='$o_id'";
				$result = mysqli_query($con, $sql);
			  
				if (mysqli_num_rows($result) > 0) {
			 
				 while($row = mysqli_fetch_assoc($result)) {
                
 			?>
					<tr>
						<td>
                        <?php 
                        $sql_proID = "SELECT * FROM ordersitem WHERE orderid='$o_id'";
                        $result_proID = mysqli_query($con, $sql_proID);
                        $row_prodID = mysqli_fetch_assoc($result_proID);
                        $p_id =  $row_prodID['productid'];

                        $sql_ProName = "SELECT * FROM products WHERE product_id='$p_id'";
                        $result_ProName = mysqli_query($con, $sql_ProName);
                        $row_ProName = mysqli_fetch_assoc($result_ProName);
                        echo  $row_ProName['product_title'];
                        ?>

                        
						</td>
						<td>
						<?php echo $row["totalprice"] ?>
						</td>
						<td>
						<?php echo $row["orderstatus"] ?>		
						</td>
						<td>
						<?php echo $row["paymentmode"]  ?>		
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
            <br>
                          <div align="center">
                            <label for="">Change Status</label>
                            <select name="status" id="">
                                <option value="Inprogress">Inprogress</option>
                                <option value="Dispatched">Dispatched</option>
                                <option value="Delivered">Delivered</option>
                               
                            </select>
                          </div>
		 
                                   <br>
                                    <div align="center">
                                        <label for="">Reason</label>
                                        <textarea align="center"class="form-control" name="reason" id="" cols="30" rows="10" style="text-align:center;width:80%"></textarea>
                                    </div>

                                     
        <div class="" align="center">
            <div class="col-md-8 text-center">
               <input type="hidden" name="orderid"value='<?php echo $_GET['id'] ?>'>
         <br>
                <input type='submit' name='submit' value='Change Status' class="btn btn-danger">
            </div>
        </div>
                                 
             
            </form>

              
                                  
  
                            
             
             
                                      
                                      
                                  
                                 
                                     

                                      
        
                    
                
                 

            
<br>
<p align="center">&copy; Bookish 2024</p>


</div>


                     
    



            

             
    

   

   
 
                           
                              
  

                                   
      

      
   
  </div>
 
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

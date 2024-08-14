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
    $total="";

    $message  = '';
$_POST['agree'] = 'false';
$_POST['payment'] = 'COD';

     //echo $_SESSION['customer']."<BR>";
    // echo $_SESSION['customerid']."<BR>";
    if(isset($_POST['submit']))
   {
        if($_POST['agree']==true)
        {
	 
       
        $country = $_POST['country'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $companyName = $_POST['companyName'];
        $addr1 = $_POST['addr1'];
        $addr2 = $_POST['addr2'];
        $city = $_POST['city'];
       
        $Postcode = $_POST['Postcode'];
       
        $Phone = $_POST['Phone'];
        $payment = $_POST['payment'];
        $agree = $_POST['agree'];
        $cid = $_SESSION['customerid'];


        $sql="select * from user_data where userid=$cid";
        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==1)
        {
            $up = "update user_data set firstname='$fname', lastname='$lname', company='$companyName', address1='$addr1', address2='$addr2', city='$city', country='$country', zip='$Postcode', mobile='$Phone'  where userid=$cid";
            $updated=mysqli_query($con,$up);
            if($updated)
            {
                if(isset($_SESSION['cart'])){
                    $total=0;
                    $cart = $_SESSION['cart'];
                    foreach($cart as $key=>$value)
                    {
                        $sql_cart="select * from products where product_id=$key";
                        $result_cart=mysqli_query($con,$sql_cart);
                        $row_cart=mysqli_fetch_assoc($result_cart);
                        $total=$total+($row_cart['product_price'])*$value['product_qty'];
                        
    
                    }
                }
                $insorder="insert into orders(userid,totalprice,orderstatus,paymentmode) values('$cid','$total','orderplaced','$payment')";
                
                if(mysqli_query($con,$insorder))
                {
                    if(isset($_SESSION['cart'])){
                        $total=0;
                        $cart = $_SESSION['cart'];
                        $orderid = mysqli_insert_id($con);
                        foreach($cart as $key=>$value)
                        {
                            $sql_cart="select * from products where product_id=$key";
                            $result_cart=mysqli_query($con,$sql_cart);
                            $row_cart=mysqli_fetch_assoc($result_cart);

                           
                            $price_product = $row_cart["product_price"];
                            $prdt_qty = $row_cart["product_qty"];
			                $qty  = $value["product_qty"];
                      $qtt= $prdt_qty- $qty;
                      $qql="update products set product_qty='  $qtt' where product_id='$key'";
                     $qres= mysqli_query($con,$qql);
                     $insorderitem="insert into ordersitem(orderid,productid,product_qty,productprice) values('$orderid','$key','$qty','$price_product')";
                           if(mysqli_query($con,$insorderitem))
                           {
                            unset($_SESSION['cart']);
                            // header("location:myaccount.php");
                            echo '<script>window.location.href = "myOrders.php";</script>';
                           }
        
                        }
                    }
                    

                }
            }
        }
        else
        {
            $ins="insert into user_data(userid,firstname,lastname,company,address1,address2,city,country,zip,mobile	) values('$cid', '$fname', '$lname', '$companyName', '$addr1', '$addr2', '$city', '$country', '$Postcode', '$Phone')";
            $inserted=mysqli_query($con,$ins);
            if($inserted)
            {
                if(isset($_SESSION['cart'])){
                    $total=0;
                    $cart = $_SESSION['cart'];
                    foreach($cart as $key=>$value)
                    {
                        $sql_cart="select * from products where product_id=$key";
                        $result_cart=mysqli_query($con,$sql_cart);
                        $row_cart=mysqli_fetch_assoc($result_cart);
                        $total=$total+($row_cart['product_price'])*$value['product_qty'];
    
                    }
                }
                $insorder="insert into orders(userid,totalprice,orderstatus,paymentmode) values('$cid','$total','orderplaced','$payment')";
                
                if(mysqli_query($con,$insorder))
                {
                    if(isset($_SESSION['cart'])){
                        $total=0;
                        $cart = $_SESSION['cart'];
                        $orderid = mysqli_insert_id($con);
                        foreach($cart as $key=>$value)
                        {
                            $sql_cart="select * from products where product_id=$key";
                            $result_cart=mysqli_query($con,$sql_cart);
                            $row_cart=mysqli_fetch_assoc($result_cart);

                          
                            $price_product = $row_cart["product_price"];
			                $qty  = $value["product_qty"];
                      $insorderitem="insert into ordersitem(orderid,productid,product_qty,productprice) values('$orderid','$key','$qty','$price_product')";
                           if(mysqli_query($con,$insorderitem))
                           {
                            unset($_SESSION['cart']);
                            // header("location:myaccount.php");
                            echo '<script>window.location.href = "myOrders.php";</script>';
                           }
        
                        }
                    }
                    

                }
            }
            
        }

        }
        else
        {
        $message =  'agree to terms and condition';
        }

    }
   $cid=$_SESSION['customerid'];
   $sql = "SELECT * FROM user_data where userid = $cid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


    
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
                              <b  class="int"> Order &nbsp;</b  ><b class="book">Checkout. </b>  <br>
                              
                              
  

                                   
        </div> <br>

     
<div class="con" align="center">
<?php
            if(isset($_SESSION['cart'])){
                $total=0;
                $cart = $_SESSION['cart'];
                foreach($cart as $key=>$value)
                {
                    $sql_cart="select * from products where product_id=$key";
                    $result_cart=mysqli_query($con,$sql_cart);
                    $row_cart=mysqli_fetch_assoc($result_cart);
                    $total=$total+($row_cart['product_price'])*$value['product_qty'];

                }
            }
            
            ?>

                                    <form method='post'>
                                    <?php echo $message;?>
                                  
			                          
				                        
				                         	
						                      
						              <div class="col-md-4">
                                      <label   >Country </label>
							<select class="form-control " name='country'>
								<option value="">Select Country</option>
								<option value="AX">Aland Islands</option>
								<option value="AF">Afghanistan</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AD">Andorra</option>
								<option value="AO">Angola</option>
								<option value="AI">Anguilla</option>
								<option value="AQ">Antarctica</option>
								<option value="AG">Antigua and Barbuda</option>
								<option value="AR">Argentina</option>
								<option value="AM">Armenia</option>
								<option value="AW">Aruba</option>
								<option value="AU">Australia</option>
								<option value="AT">Austria</option>
								<option value="AZ">Azerbaijan</option>
								<option value="BS">Bahamas</option>
								<option value="BH">Bahrain</option>
								<option value="BD">Bangladesh</option>
								<option value="BB">Barbados</option>
							</select>
                                      </div>       
					 
							
       
							
								<div class="col-md-4">
									<label>First Name </label>
									<input class="form-control" name='fname' placeholder="" value="<?php if(isset($row['firstname'])) { echo $row['firstname']; } ?>" type="text">
								</div>
								<div class="col-md-4">
									<label>Last Name </label>
									<input class="form-control" name='lname' placeholder="" value="<?php if(isset($row['lastname'])) {echo $row['lastname']; } ?>" type="text">
								</div>
     
							<div class="col-md-4">
							<label>Company Name</label>
							<input class="form-control" name='companyName' placeholder="" value="<?php if(isset($row['company'])) {echo $row['company']; } ?>" type="text">
							</div>
                            <div class="col-md-4">
							<label>Address </label>
							<input class="form-control" name='addr1' placeholder="Street address" value="<?php if(isset($row['address1'])) {echo $row['address1']; } ?>" type="text">
						
							<input class="form-control" name='addr2' placeholder="Apartment, suite, unit etc. (optional)" value="<?php if(isset($row['address2'])) {echo $row['address2'];  } ?>" type="text">
							</div>
							
								<div class="col-md-4">
									<label>Town / City </label>
									<input class="form-control" name='city' placeholder="Town / City" value="<?php if(isset($row['city'])) {echo $row['city']; } ?>" type="text">
								</div>
 
								<div class="col-md-4">
									<label>Postcode </label>
									<input class="form-control" name='Postcode' placeholder="Postcode / Zip" value="<?php if(isset($row['zip'])) {echo $row['zip']; } ?>" type="text">
								</div>
							
                            <div class="col-md-4">
							<label>Phone </label>
							<input class="form-control" name='Phone'  id="billing_phone" placeholder="" value="<?php if(isset($row['mobile'])) {echo $row['mobile']; } ?>" type="text">
						 
					</div>
				
			
			
			
			<h4 class="heading">Your order</h4>
			
			<table class="col-mg-6 ">
				<tbody>
					<tr>
						<th>Cart Subtotal</th>
						<td><span class="amount"><?php echo $total ?>.00/-</span></td>
					</tr>
					<tr>
						<th>Payment Mode</th>
						<td>
							Cash On Delivery				
						</td>
					</tr>
					<tr>
						<th>Order Total</th>
						<td><strong><span class="amount"><?php echo $total  ?>.00/-</span></strong> </td>
					</tr>
				</tbody>
			</table>
			
			
        
        <div class="">
            <div class="col-md-12 text-center">
                <input type='submit' name='submit' value='Order Now' class="btn btn-success">
            </div>
        </div>
		
		
	
</div></form>

</div>


        

    



       

      
      
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

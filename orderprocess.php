<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>BookStore</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main3.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
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
header('location:orders.php');

}
     }
                    

              
     
       

    
 

    
    ?>
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header" >

                    <h4><b style="color: #feffff;background-color: #17252a;">BookShelf</b></h4>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    
                    

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown" >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #3aafa9;">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="cart.php"><i class="icon-user"></i> Cart </a>
                            </li>
                           
                            <li class="divider"></li>
                            <li><a href="signin.php"><i class="icon-gear"></i> Login </a>
                            </li>
                            <li><a href="signout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                
               
            </div>

            <ul id="menu" class="collapse" >

                
            <li class="panel">
                    <a href="index1.php" >
                        <i class="icon-home"></i> Home
	   
                       
                    </a>                   
                </li>



                <li><a  href="bcat.php"><i class="icon-book"></i> Book Categories </a></li>
                <li><a  href="checkout.php"><i class="icon-book"></i> Checkout </a></li>
                <li><a  href="mycart.php"><i class="icon-book"></i> Cart </a></li>
               
                <li><a data-toggle="modal"  data-target="#newReg"><i class="icon-phone">&nbsp;</i>Contact Us </a></li>
                <li><a  href="signin.php"><i class="icon-signin"></i> Login Page </a></li>


</ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content" style="background-color: #3aafa9;">

        <div class="row">
         
                    <div class="jumbotron" style="background-color: #3aafa9;">
                        <h1 style="color:#feffff;text-align: left;font-size:50px;text-align:center;">Cancel Order <b style="color:#17252a;"></b></h1>
                        
                        
                    </div>
                </div>
                <form method='post'>
            <div class="inner" style="min-height:1100px;background-color: #3aafa9">
                

                <div class="col-lg-12">
                    <div class="panel panel-default" style="background-color: #def2f1;">
                        
                        <div class="panel-body" >
                           

                            <div class="tab-content" style="border-color: #def2f1;;">
                                <div class="tab-pane fade in active" id="home-pills">
                
               
                                <table class="cart-table account-table table table-bordered bg-white text-dark">
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
                          <div>
                            <label for="">Change Status</label>
                            <select name="status" id="">
                                <option value="Inprogress">Inprogress</option>
                                <option value="Dispatched">Dispatched</option>
                                <option value="Delivered">Delivered</option>
                               
                            </select>
                          </div>
		 
                                   
                                    <div>
                                        <label for="">Reason</label>
                                        <textarea class="form-control" name="reason" id="" cols="30" rows="10"></textarea>
                                    </div>

                                     
        <div class="row">
            <div class="col-md-12 text-center">
               <input type="hidden" name="orderid"value='<?php echo $_GET['id'] ?>'>

                <input type='submit' name='submit' value='Change Status' class="btn">
            </div>
        </div>
                                 
             
	
</div>

                                    </div> 
                        
                              
                			
                        
			
		

           
            
                                </div>  
                                
                               
                                
                              
                            </div>
                        </div>
                    </div>
                </div>
              
</div>
              
               
              
            </form>
            <div class="col-lg-12">
                        <div class="modal fade" id="newReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="H4"> Feedback</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" name="frm" method="POST" action="feedback.php">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="uname" id="uname"/>
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text"  name="email" id="email"/>
                                            
                                        </div>
                                       <div class="form-group">
                                            <label>Feedback</label>
                                           <textarea name="feedback" id="feedback" cols="60" rows="10"></textarea>
                                            
                                        </div>
                                       
                                       
                                   
                                        </div>
                                        <div class="modal-footer">
                                           <input type="submit" name="submit" value="Submit" id="submit"/>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              
               



        </div>
       <!--END PAGE CONTENT -->

 
    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
   <div id="footer" style="background-color: #3aafa9;border:0;">
        <p>&copy;  BookShelf &nbsp;2024 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- END GLOBAL SCRIPTS -->
   
</body>
    <!-- END BODY-->
    
</html>

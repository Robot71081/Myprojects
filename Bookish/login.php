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
       
      
     
      
      </form>
    </div>
  </div>
</nav>
<div class="heading" >
                              <b  class="int"> User &nbsp;</b  ><b class="book">Login. </b>  <br>
                              
                              
  

                                   
        </div>
       <form name="frmUser" method="post" action="loginprocess.php" align="center" class="form-signin">

                        <h3 class="">
                    Enter Signin details
                </h3>
                <?php
            if(isset($_REQUEST['message']))
            {
                if($_GET['message']=="1")
                {   ?>

                   <div class='alert alert-danger'>invalid Credential</div>
         <?php
                }
            }
            
            ?>
                            Email:<br>
                            <input type="text" name="email" id="email" class="col-md-2">
                            <br>
                            Password:<br>
                            <input type="password" name="password" class="col-md-2">
                            <br><br>
                            <input type="submit" name="submit" value="submit" class="btn text-muted text-center btn-success">
                            <input type="reset" class="btn text-muted text-center btn-success">
                            </form>


                  
               </div>
     <br>
               <div id="" class="signup">
            <form action="signup.php" method="post" align="center"class="">
            <h3 class="">
                    Enter Registration details
                </h3>
                <?php
            if(isset($_REQUEST['message']))
            {
                if($_GET['message']=="2")
                {   ?>

                   <div class='alert alert-danger'>invalid Credential</div>
<?php
                }
            }
            
            ?>
                      First Name:<br>
                            <input type="text" name="fname" id="fname" class="col-md-2">
                            <br>
                            Last Name:<br>
                            <input type="text" name="lname" id="lname" class="col-md-2">
                            <br>

                    Email:<br>
                            <input type="text" name="email" id="email" class="col-md-2">
                            <br>
                            
                            Password:<br>
                            <input type="password" name="password" class="col-md-2">
                            <br>
                          
                            <br>
                            <input type="submit" name="submit" value="submit" class="btn text-muted text-center btn-success">
                            <input type="reset" class="btn text-muted text-center btn-success">
                            </form>
             
                
            
        </div>
    </div>
  

                              
                              
  

                                   
        </div>
     





        

    



       

      
      
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

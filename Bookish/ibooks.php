<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="example.css">
  




    <?php
    include('dbconnection.php');

    if(isset($_GET["edit"]))
    {
        $editid=$_GET["edit"];
        $eqry="select product_id,product_title,product_cat,product_price,product_image,productd,product_qty from products where product_id=$editid";
        $eres=mysqli_query($con,$eqry);
        $row=mysqli_fetch_row($eres);
        $eproduct_title=$row[1];
        $eproduct_cat=$row[2];
       $eproduct_image=$row[4];
        $eproduct_price=$row[3];
        $eproductd=$row[5];
        $eprdt_qty=$row[6];
      
        
    }
   


    $sqry="select product_id,product_title,product_cat,product_price,product_image,productd,product_qty from products";
    $rsuser=mysqli_query($con,$sqry);
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
                              <b  class="int"> Insert &nbsp;</b  ><b class="book">Books. </b>  <br>
                              
             </div>
  <div class="col-lg-12" align="center">
             <form class="form-horizontal" id="popup-validation" action="bookins.php" method="post" enctype="multipart/form-data">
                                       
                                   

                                       
                                            
                                       <div class="form-group">
                                           <label class=" col-lg-4">Book Name</label>
                                           <div class="form-group col-lg-4">
                                               <input type="text" class=" form-control" name="product_title" id="product_title" value="<?php if(isset($eproduct_title)){echo $eproduct_title;}?>">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class=" col-lg-4">Book Category</label>
                                           <div class="col-lg-4">
                                               <input type="text" class="validate[required,maxSize[20]] form-control" name="product_cat" id="product_cat" value="<?php if(isset($eproduct_cat)){echo $eproduct_cat;}?>">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class=" col-lg-4">Book Price</label>
                                           <div class="col-lg-4">
                                               <input type="text" class="validate[required,maxSize[20]] form-control" name="product_price" id="product_price" value="<?php if(isset($eproduct_price)){echo $eproduct_price;}?>">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class=" col-lg-4">Book Qauntity</label>
                                           <div class="col-lg-4">
                                               <input type="text" class="validate[required,maxSize[20]] form-control" name="prdt_qty" id="prdt_qty" value="<?php if(isset($eprdt_qty)){echo $eprdt_qty;}?>">
                                           </div>
                                       </div>
                                       <div class="form-group">
                                           <label class=" col-lg-4">Book Image </label>
                                           <div class="col-lg-4">
                                           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                             <input type="file" class="" name="productimage" id="productimage" value="<?php if(isset($eproduct_image)){echo $eproduct_image;}?>">
                                           </div>
                                       </div>
                                      
             
                                       <div class="form-group">
                                       <br>  <label class=" col-lg-4">Book Description</label>
                                           <div class="col-lg-4">
                                           <input type="text" class="validate[required] form-control" name="productd" id="productd" value="<?php if(isset($eproductd)){echo $eproductd;}?>">
                                           </div>
                                       </div>
                                    
                                       
                                       
                                    
                                       <div style="text-align:center" class="form-actions no-margin-bottom">
                                           <input type="submit" value="<?php if(isset($editid)){echo "Save";}else{echo"Add";}?>" class="btn btn-success btn-lg " name="btn"/>
                                           <input type="hidden" name="editid" value="<?php if(isset($editid)){echo $editid;}?>"/>

                                       </div>
                                       </form>

           
                               </div>  
                               
                             
                           </div>
                       </div>
                   </div>
               </div>
             
             
                                      
                                      
                                  
                                 
                                       </form>

                                       </div>

        
                    
                
                 

            
<br>
<p align="center">&copy; Bookish 2024</p>


</div>


                     
    



            

             
    

   

   
 
                           
                              
  

                                   
      

      
   
  </div>
 
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

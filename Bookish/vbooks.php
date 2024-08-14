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
        $eqry="select product_id,product_title,product_cat,product_price,product_image,productd from products where product_id=$editid";
        $eres=mysqli_query($con,$eqry);
        $row=mysqli_fetch_row($eres);
        $eproduct_title=$row[1];
        $eproduct_cat=$row[2];
       $eproduct_image=$row[4];
        $eproduct_price=$row[3];
        $eproductd=$row[5];
      
        
    }
   


    $sqry="select product_id,product_title,product_cat,product_price,product_image,productd from products";
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
                              <b  class="int"> View &nbsp;</b  ><b class="book">Books. </b>  <br>
                              
             </div>

             <table class="table  table-hover " align="center" style="text-align:center;width:80%">
                    
                    <thead >
                            <tr>
                                <th style="text-align:center;">Book Id</th>
                                <th style="text-align:center;">Book Name</th>
                                <th style="text-align:center;">Book Category</th>
                                <th style="text-align:center;">Book Price</th>
                                <th style="text-align:center;">Book Image</th>
                                <th style="text-align:center;">Book Description</th>
                                
                               
                                
                                <th class="title">Edit</th>
                                <th class="title">Delete</th>
                            </tr>
                    </thead>
                    <tbody>
                                <?php
                                   while($row=mysqli_fetch_row($rsuser))
                                   {
                                       echo"<tr>";
                                       echo"<td>$row[0]</td>";
                                       echo"<td>$row[1]</td>";
                                       echo"<td>$row[2]</td>";
                                       echo"<td>$row[3]</td>";
                                       echo"<td>$row[4]</td>";
                                       echo"<td>$row[5]</td>";
                                     
                                      
                                       echo"<td><a href='ibooks.php?edit=$row[0]'>Edit</a></td>";
                                       echo"<td><a href='bookins.php?did=$row[0]'>Delete</i></a></td>";

                                       
                                        
                                       echo"</tr>";
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

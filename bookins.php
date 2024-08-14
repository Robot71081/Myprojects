<?php
    include('dbconnection.php');
    //insert-update
   
        if(isset($_POST["btn"]))
    {
        if($_POST["btn"]=="Add")
        {
            //insert
            $product_title=$_POST["product_title"];
            $product_cat=$_POST["product_cat"];

            $product_price=$_POST["product_price"];
           
           $productd=$_POST["productd"];
           $prdt_qty=$_POST["prdt_qty"];
          
           

            $picture_name=$_FILES['productimage']['name'];
            $picture_type=$_FILES['productimage']['type'];
            $picture_tmp_name=$_FILES['productimage']['tmp_name'];
            $picture_size=$_FILES['productimage']['size'];

            if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
            {
	            if($picture_size<=50000000)
                {
                    $pic_name=time()."_".$picture_name;
		            move_uploaded_file($picture_tmp_name,"product_images/".$pic_name);
                    echo  $qry="insert into products(product_title,product_cat,product_price,product_image,productd,product_qty) values('$product_title',' $product_cat','$product_price','$pic_name','$productd','$prdt_qty')";
                    $res=mysqli_query($con,$qry);
                    if(!$res)
                    {
                        echo"problem in insert";
                    }
                    else
                    {
                        //echo"Success";
                        header('location:ibooks.php');
                    }
                }
	
		           
		

            }

        
        }
    
   


        if($_POST["btn"]=="Save")
        {
            //update
            
            $editid=$_POST["editid"];
            $product_title=$_POST["product_title"];
            $product_cat=$_POST["product_cat"];
            $product_price=$_POST["product_price"];
            $prdt_qty=$_POST["prdt_qty"];
            $productd=$_POST["productd"];
         
          

            if(isset($_FILES) & !empty($_FILES)){
                $name = $_FILES['productimage']['name'];
                $size = $_FILES['productimage']['size'];
                $type = $_FILES['productimage']['type'];
                $tmp_name = $_FILES['productimage']['tmp_name']; 
                $max_size = 10000000;
                $extension = substr($name, strpos($name, '.') + 1); 
                if(isset($name) && !empty($name)){
                    if(($extension == "jpg" || $extension == "jpeg") && $type == "image/jpeg" && $size<=$max_size){
                        $location = "product_images/";
                        $filePath = $location.$name;
                        if(move_uploaded_file($tmp_name, $filePath)){
                            $qry="update products set product_title='$product_title',product_cat='$product_cat',product_price='$product_price',product_image=' $filePath',productd='$productd' ,product_qty='$prdt_qty' where product_id='$editid'";
                    $res=mysqli_query($con,$qry);
                    if(!$res)
                    {
                        echo"problem in insert";
                    }
                    else
                    {
                        //echo"Success";
                        header('location:ibooks.php');
                    }
                        }
                    }
                }
            }
           
                 
                    
                   
              
           
           
            
        }
    }
    //code for delete record
    if(isset($_GET["did"]))
    {
        //user wants to delete record
        $did=$_GET["did"];
        $dqry="delete from products where product_id=$did";
        $res=mysqli_query($con,$dqry);
        if(!$res)
        {
            echo"problem in delete";

        }
        else
        {
            //echo"record deleted";
            header('location:vbooks.php');
        }

       
    }
    

?>


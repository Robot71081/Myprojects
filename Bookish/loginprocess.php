<?php
include('dbconnection.php');
session_start();
if(isset($_POST['submit']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=$_POSt['password'];
   // $sql="select * from user where email='$email' and password='$password'";
   // $result=mysqli_query($con,$sql);
   $result = mysqli_query($con,"SELECT * FROM user WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
   $row  = mysqli_fetch_array($result);

    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['customer']=$email;
        $_SESSION['customerid']=$row['id'];
        header('location:index.php');
    }
    else
    {
        header('location:signin.php?message=1');
       // $message="incoorect credentails";
    }
}
?>
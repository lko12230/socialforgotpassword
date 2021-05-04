<?php
 include('config.php');  
 if(isset($_POST['submit']))
 {
    $id = $_POST['id'];   
 $password = $_POST['password'];  
 $sql = "UPDATE admin SET password='$password' WHERE ID_NUMBER = $id";
$update=mysqli_query($conn,$sql);
if($update)
     {  
     
         header("Location: http://localhost/login/");
     }  
     else
     {  
       
            header("Location: http://localhost/forgotpassword/");
           
    }  
 }    
 
   
if(isset($_POST['forgot']))
{
 header("Location: http://localhost/forgotpassword/");
}
if(isset($_POST['register']))
{
 header("Location: http://localhost/register/");
}
if(isset($_POST['contact']))
{
 header("Location: http://localhost/support/");
} 
?>
<?php


include 'Login_DB.php';


$username = $password ='';


if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];


   $con= connection();
   
   Sel_Hash($con,$username,$password);

   closeconn($con); 

}



?>    
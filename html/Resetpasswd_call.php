<?php

include 'Resetpasswd_DB.php';

$username =$newpassword= $cpassword='';
$password='';


if(isset($_POST['submit']))
{
    //$username = $_POST['username'];
    $newpassword = $_POST['newpassword'];
    $cpassword = $_POST['cpassword'];
   
    $conn=connection();
    
    if($newpassword==$cpassword)
    {
    update($conn,$username,$newpassword);
    // header('Location:Adminpanel.php ');
    }
    

    closeconn($conn); 

}



?>    
<?php

include 'Verifyotp_DB.php';


$otp ='';


if(isset($_POST['submit']))
{
    $otp =$_POST['otp'];
    
    $conn=connection();
   
    if(selotp($conn,$otp)==true)
    {
        echo 'Valid OTP';
        header('Location:Resetpasswd.php ');
        //echo '<a href=Resetpasswd.php>Click</a>' ;
    }
    else {
       echo 'Invalid OTP';
       echo '<a href=Verifyotp.php>Back</a>' ;}
   }




?>    
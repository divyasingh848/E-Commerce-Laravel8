<?php

include_once 'validation.php';
include_once 'DBconn.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    valid_name($name);  
    valid_num($mobile);
    valid_email($email);
    

    if(valid_name($name) && valid_num($mobile) && valid_email($email))
    {
      sql1($name,$mobile,$email,$msg);
    }   
}
   
?>




<?php

include 'Fpasswd_DB.php';

$username = '';


if(isset($_POST['submit']))
{
    $username = $_POST['username'];
   
    $con= connection();
   
    sel_ins($con,$username);
    
    

    closeconn($con); 

}



?>    
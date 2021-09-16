<?php

$servername = "localhost";
$username_db = "root";
$password_db = "";
$db = "m_resume";

function connection()
{
  global $servername,$username_db,$password_db,$db;

// Create connection
$conn = new mysqli($servername, $username_db, $password_db,$db);

// Check connection 
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo 'connected';
return $conn;
}

function selotp($conn,$otp)
 {
   $sql= "SELECT OTP FROM LOGIN WHERE ID=5";
   
   $result = $conn->query($sql);
   //echo '$result';

   $row = $result->fetch_row();

   if($row[0]== $otp)
   {   return true;
      
   }
   else
    return false;
   
   
 }
 
function closeconn($conn){
$conn->close();
}
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="m_resume";
$value="";

//MYSQLi procedural 
function sql1($name,$mobile,$email,$msg)
{
  global $servername,$username,$password,$db;

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
//The mysqli_connect() function in PHP is used to connect you to the database

// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO CONTACT (NAME, MOBILE, EMAIL,MESSAGE)
        VALUES ('$name', '$mobile', '$email','$msg')";

if (mysqli_query($conn, $sql)) 
{
  $GLOBALS['value']= "NEW RECORD CREATED SUCESSFULLY!!";
} 
else 
{
  $GLOBALS['value']= "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

?>







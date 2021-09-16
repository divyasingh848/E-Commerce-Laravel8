<?php
session_start();

$servername = "localhost";
$username_db = "root";
$password_db = "";
$db = "m_resume";

//MYSQLi object oriented
function connection()
{
  global $servername,$username_db,$password_db,$db;

// Create connection
$conn = new mysqli($servername, $username_db, $password_db,$db);

// Check connection 
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo 'connected';
return $conn;
}

 function Sel_Hash($conn,$username,$password)
 {
  $sql = "select password,salt,hash_algorithm from login where username ='".$username."';";
  
  //$result- to store = $conn- to use conn  --> query- query to use($sql)
  $result = $conn ->query($sql);
  //print_r($result);
  
  //The fetch_row() - fetches one row from a result-set
  $row = $result->fetch_row();
  //echo "$row";
  
  $hash_password = md5($password."_".$row[1]);
  //echo "$password";
  //echo " $hash_password";

  if($hash_password == $row[0]){
    echo "Password Matched!!";

    //session
    $_SESSION['username']= $username;  
    echo "Welcome"." ".$_SESSION['username'];
     
    header('Location:Message.php ');
    
  }
  else{
     echo "Password not matched";

     echo '<a href="Adminpanel.php">Back</a>';
  }
 }
 

function closeconn($conn){
 $conn->close();
}



?>
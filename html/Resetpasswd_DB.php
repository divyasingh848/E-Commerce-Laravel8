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
echo 'connected';
return $conn;
}


 function update($conn,$username,$newpassword)

 {
    $encrypted_password = selpasswd($conn, $newpassword);
    //echo "$encrypted_password";
    
    $sql = "UPDATE login SET password='$encrypted_password' WHERE id=5";

    $conn->query($sql) ;
          
  //  echo " updated ";
   header('Location: Adminpanel.php');
  
 }

 function selpasswd($conn,$password)
 {
   //encrypt password
   $sql = "select password,salt,hash_algorithm from login where ID =5 ";
   //echo '$sql';
   
   //$result- to store = $conn- to use conn  --> query- query to use($sql)
   $result = $conn ->query($sql);
   
   
   //The fetch_row() - fetches one row from a result-set
   $row = $result->fetch_row();
   //echo "$row[0]";
   
   $hash_password = MD5("{$password}_DEFAULT_SALT");
   //echo "$hash_password";

  return $hash_password;

  }
 
 

function closeconn($conn){
 $conn->close();
}



?>
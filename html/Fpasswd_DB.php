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
 //echo 'connected..';
return $conn;
}

function sel_ins($conn,$username)
 {
 $sql = "select username from login where id=5";
  
 // $result- to store = $conn- to use conn  --> query- query to use($sql)
  $result = $conn ->query($sql);
  //print_r($result);

  //The fetch_row() - fetches one row from a result-set
  $row = $result->fetch_row();
  //echo "$row[0]"; 
  
  if($row[0]== $username)
  {
  echo "Valid Username!!";     
    
     $d = rand(100000,1000000);
     
    
     $sql1="UPDATE LOGIN
            SET OTP='$d'
            WHERE ID=5";
    
      //echo '$sql1';        

      if (mysqli_query($conn, $sql1)) 
      {
       echo "New record created successfully";
       echo $d;
       //header('Location:Message.php ');
       echo '<a href="Verifyotp.php">Click Me</a>';
      } 
      else 
      {
       echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
      }
    
 }
  else
  {
     echo "Invalid Username!!";
     //echo '<a href="Forgotpasswd.php">Back</a>';
  }
  
  function closeconn($conn){
  $conn->close();

  
  
 }
 


}


?>
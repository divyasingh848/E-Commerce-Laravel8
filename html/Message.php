<?php

session_start();

if(!isset($_SESSION['username'])){

	header('location:Adminpanel.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSAGES</title>
    <link rel="stylesheet" href="/html/css/page4.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">


</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "m_resume";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$ID="";
$NAME="";
$MOBILE="";
$EMAIL="";
$MESSAGE="";
$TIMESTAMP="";

$sql1="SELECT * from contact ORDER BY TIMESTAMP DESC";
$res=mysqli_query($conn,$sql1);
//mysqli_query funct accepts str value as query execute query on db


$sqlcount="SELECT COUNT(*) from contact";
$res_count = mysqli_query($conn, $sqlcount);
$row_count=$res_count->fetch_row();
$countval=$row_count[0];
// echo $row_count[0];


// mysqli_close($conn);
?>
    
<main>

<div class="div1">

     <img src="/html/img/assets/assets/img.png" class="img"><div class="txt"><h4>WELCOME</h4><h2><?php echo "Some Name";?><div class="txt3"><img src="/html/img/assets/assets/logout.png" class="img4"><form action="Logout.php"><input type="submit" name="submit" value="Logout"></form></div></h2></div>
     
     <!-- $_SESSION['username'] -->
</div>


<div class="div2">

<div class="txt2"><h1>MESSAGES(<?php echo $countval; ?>)</h1><h4>NEW MESSAGES(<?php echo counted($conn); ?>)</h4></div>

<div class="right">
<?php  print1();?></div>
                
<div class="left">

<?php
if(mysqli_num_rows($res)>0)
{
  while($row=$res->fetch_assoc())
	{     
        $ID=$row['ID'];
		    $NAME=$row['NAME'];
        $MESSAGE=$row['MESSAGE'];
        $ST=$row['ST']; ?>

        <div style="opacity:<?php 
        if($row['ST']=="0"){ echo "2";}else {echo "0.4";}?> ;">
        <?php
        
        echo "<a href='?id=$ID' '><ul><li><b>$NAME</b></li><li>$MESSAGE</li></ul></a>";
        echo "</br>"."</br>"; ?>
        <div style="border-top: solid 1px rgb(221, 218, 218);"><br></div></div>
        
<?php  }
    
}  
    function search1($id)
    {  //ID = array, id=user click value/db  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "m_resume";
        
        // Create connection
        $conn2 = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn2) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql2="SELECT * from contact where ID = $id";
        $res=mysqli_query($conn2,$sql2);

        $row = $res->fetch_row();

        $user_id= $row[0];
        $user_name = $row[1];
        $user_mobile = $row[2];
        $user_email = $row[3];
        $user_message=$row[4];
        $user_timestamp=$row[5];
        $user_st=$row[6];
        
        ?>
        
        <div style="padding: 10px;">
        <?php echo "<b>".$user_name."</b>"."</br>"."</br>";
        echo  $user_timestamp."</br>"."</br>";
        echo "<b>"."Mob.:"."</b>".$user_mobile." "." "."<b>"."Email:"."</b>".$user_email."</br>"."</br>";?></div>
        <div style="border-top:1px solid rgb(221, 218, 218); padding: 10px; "><?php echo $user_message;?></div>
        
       <?php     
       $sql3= "UPDATE CONTACT SET ST='1' where ID=$id";
       if(mysqli_query($conn2, $sql3))
      { 
        $sql4="SELECT SUM(ST) FROM CONTACT";
        $res1=mysqli_query($conn2, $sql4);
  
        $row = $res1->fetch_row();
        $st=$row[0];  
        
        // echo $st;
      }
      }

      function counted($conn2)
      {
        $sql_read="SELECT COUNT(ID) FROM Contact where ST='0'";  
         $res2=mysqli_query($conn2, $sql_read);   
         $rowno = $res2->fetch_row();
         $Cval=$rowno[0];  
         return $Cval;
      }

     function print1(){
    
      if (!empty($_GET['id']))
          search1($_GET['id']);
    }?>
    
</div>


</div>

</div>

</main>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSAGES</title>
    <link rel="stylesheet" href="/html/css/page4.css">

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

mysqli_close($conn);
?>
    
<main>

<div class="div1">

<img src="/html/img/assets/assets/img.png" class="img"><div class="txt"><h4>WELCOME</h4><h2><?php echo "Some Name";?><div class="txt3"><img src="/html/img/assets/assets/logout.png" class="img4"><form action="Logout.php"><input type="submit" name="submit" value="Logout"></form></div></h2></div>
     
</div>


<div class="div2">

<div class="txt2"><h1>MESSAGES()</h1><h4>NEW MESSAGES</h4></div>


<div id="right" class="right">

                            <div><b><p id="NAME"></p></b><br>
                            <p id="TIMESTAMP"></p><br>
                            <span><p id="MOBILE" ></p><p id="EMAIL"></p></span><br></div><hr><br>
                            <p id="MESSAGE"></div>
                        

                            

<div class="left">

<?php

if(mysqli_num_rows($res)>0)
{
  while($row=$res->fetch_assoc())
			{ 
        $ID=$row['ID'];
				$NAME=$row['NAME'];
        $TIMESTAMP=$row['TIMESTAMP'];
        $MOBILE=$row['MOBILE'];
        $EMAIL=$row['EMAIL'];
        $MESSAGE=$row['MESSAGE'];?>

       <div onclick="myFunction('<?php echo $NAME; ?>','<?php echo $TIMESTAMP; ?>','<?php echo $MOBILE; ?>','<?php echo $EMAIL; ?>','<?php echo $MESSAGE ;?>')"><ul id="list" style="border-top: solid 1px rgb(221, 218, 218);"><br><li><b><?php echo $NAME ?></b></li><li><?php echo $MESSAGE ?></li></ul><?php echo "</br>"."</br>"; ?></div>
      
     <?php }
    } 
     ?> 
</div>


</div>

</div>

</main>
<script>

function myFunction( name,ts,mob,email,msg){
  // var name,ts,mob,email,msg;

   document.getElementById("NAME").innerHTML=name; 
	 document.getElementById("TIMESTAMP").innerHTML=ts;
	 document.getElementById("MOBILE").innerHTML=mob;
	 document.getElementById("EMAIL").innerHTML=email;
	 document.getElementById("MESSAGE").innerHTML=msg;}


  
    //create xmlHttpRequest object
  var request = new XMLHttpRequest();

  request.open("GET", true);

  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("right").innerHTML=this.responseText;
    }
  }; request.send();

  //  var name = document.getElementById("NAME").innerHTML; 
  //  var ts =document.getElementById("TIMESTAMP").innerHTML;
  //  var mob =document.getElementById("MOBILE").innerHTML;
  //  var email =document.getElementById("EMAIL").innerHTML;
  //  var msg =document.getElementById("MESSAGE").innerHTML;
  // request.open("GET", "page4.php", true);
  

</script>

</body>
</html>
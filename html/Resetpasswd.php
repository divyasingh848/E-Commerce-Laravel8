<!-- <php include 'Resetpasswd_call.php'; ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET PASSWORD</title>

<link rel="stylesheet" href="/html/css/Resetpasswd.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <main>
         
        <div class="div1"> 
             <div class="div2">
             <h3>RESET PASSWORD</h3> <br><br>
             <form action="Resetpasswd.php" method="POST"> 
             <!-- <label for="uname"><h5>USER NAME</h5></label>
             <input type="text" placeholder="Placeholder"  name='username' required><br> -->

             <label for="psw"><h5>NEW PASSWORD</h5></label>
             <input type="password" placeholder="***************" name='newpassword' required >
             
             
             <label for="psw"><h5>CONFIRM PASSWORD</h5></label>
             <input type="password" placeholder="***************" name='cpassword' required >
             
             <div><input button type="submit" value="SUBMIT" name="submit"></button> </div> 

             </form>

             
           </div>
        </div>
    
    
    </main>

    
</body>
</html>
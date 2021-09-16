<?php include 'Login_call.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpanel</title>

<link rel="stylesheet" href="/html/css/Adminpanel.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <main>
         
        <div class="div1"> 
             <!-- <div class="word"><h3>ADMIN PANEL</h3></div>   -->
            <div class="div2">
              <h1>LOGIN</h1> <br>
             <form action="Adminpanel.php" method="POST">
             <label for="uname"><h4>USERNAME</h4></label>
             <input type="text" placeholder="Placeholder" required name='username'><br>
             
             
             <label for="psw"><h4>PASSWORD</h4></label>
             <input type="password" placeholder="***************" name='password' required >
             
             <div><h5><a href="Forgotpasswd.php">Forgot Password?</a></h5> 
             <input button type="submit" value="LOGIN" name="submit"></button> </div> 
             
             </form>

             
           </div>
        </div>
    
    
    </main>

    
</body>
</html>
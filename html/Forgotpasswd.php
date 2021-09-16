<?php include 'Fpasswd_call.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORGOT PASSWORD</title>

    <link rel="stylesheet" href="/html/css/Forgotpasswd.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <main>
         
        <div class="div"> 
            <div class="div1">
             <h1>FORGOT PASSWORD</h1> <br><br><br>
            
             <form action="Fpasswd_call.php" method="POST"> 
             <label for="uname"><h4>USERNAME</h4></label>
             <input type="text" placeholder="Enter Username"  name='username' required>
             
             <button type="submit" class="button" name="submit">GET OTP</button> 
             
             </form> 

             
           </div>
        </div>
    
    
    </main>

    
</body>
</html>
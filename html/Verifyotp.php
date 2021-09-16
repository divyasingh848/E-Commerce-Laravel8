<?php include 'Verifyotp_call.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFY PASSWORD</title>

    <link rel="stylesheet" href="/html/css/Forgotpasswd.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>

    <main>
         
        <div class="div"> 
            <div class="div1">
             <h1>VERIFICATION CODE</h1> <br><br><br>
            
             <form action="Verifyotp.php" method="POST"> 
             <div><label for="Vcode"><h4>ENTER YOUR OTP</h4></label>
             <input type="text" placeholder="ENTER OTP"  name='otp' required></div>
             <!-- <span style="color: red;"> <php echo $err; ?> </span><br> -->

             <button type="submit" class="button" name="submit" >VERIFY</button> 
             
             </form> 

             
           </div>
        </div>
    
    
    </main>

    
</body>
</html>
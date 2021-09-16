
<?php include_once 'hello.php'?>
<!-- php include 'DBconn.php' ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="/html/css/Contact.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    
    <main>
     
        <div class="div1">
    
    
            <div class="picbox"><img src="/html/img/assets/assets/img.png" width="350px" height="200px"></div>
            
            <div class="content1">
                  <h2>SOME NAME</h2> 
                  <h3>Web Devloper</h3> 
                  <br> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
                  <p>A voluptate recusandae accusamus voluptates amet aliquid Necessitatibus, impedit! fugit officiis</p> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  molestiae nisi?  </p>
                    
                    </div>
        
            <div class="content2" >

              <div class="content3">
                  <h1>CONTACT ME</h1>
                  <br>
                  <span Style="color:green"; ><?php echo $value;?></span><br>
                  
                  <br>
                  <form action="Contact.php" method="POST">
                    <label for="fname"><h4>FULL NAME</h4></label>
                    <input type="text" placeholder="Example Name" name="name" id="name"><span style="color: red;"><?php echo $err_name; ?> </span><br><br>
                    

                    <label for="Mobile"><h4>MOBILE</h4></label>
                    <input type="text" placeholder="1234567890" name="mobile" id="mobile"><span style="color: red;"> <?php echo $err_num; ?>  </span><br><br>
                    

                    <label for="Email"><h4>EMAIL</h4></label>
                    <input type="text" placeholder="example@mail.com" name="email" id="email"><span style="color: red;"> <?php echo $err_email; ?>  </span><br><br>
                   

                    <label for="Message"><h4>MESSAGE</h4></label>
                    <textarea placeholder="Some Message" name="msg"></textarea><br>

                    <input type="button" value="Back" name="back">
                    <input type="submit" value="Submit" name="submit">
                    
                  </form>

              </div>


            </div>        
        
        </div>




</body>
</html>
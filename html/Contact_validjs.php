<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="/html/css/Contact.css">

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
                  <!-- <span Style="color:green"; ><php echo $value;?></span><br> -->
                  
                  <br>
                  <form action=""  onsubmit="return validation()">
                    
                    <label for="fname"><h4>FULL NAME</h4></label>
                    <input type="text" placeholder="Example Name" id="name" required><span id="name_err" style="color: red;"></span><br><br>
                    

                    <label for="Mobile"><h4>MOBILE</h4></label>
                    <input type="text" placeholder="1234567890" id="mobile" required><span id="mobile_err" style="color: red;"></span><br><br>
                    

                    <label for="Email"><h4>EMAIL</h4></label>
                    <input type="text" placeholder="example@mail.com" id="email" required><span id="email_err" style="color: red;"></span><br><br>
                   

                    <label for="Message"><h4>MESSAGE</h4></label>
                    <textarea placeholder="Some Message" name="msg"></textarea><br>

                    <input type="button" value="Back" name="back">
                    <input type="submit" value="Submit" name="submit">
                    
                  </form>

              </div>
             
            <script>
              function validation(){
                var name = document.getElementById("name").value;
                var mobile = document.getElementById("mobile").value;
                var email = document.getElementById("email").value;

                var regx1 = /[a-zA-Z]/;
                var regx2 = /^[789][0-9]{9}$/ ; 
                var regx3 = /^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/ ;

                if(regx1.test(name)){
                  document.getElementById("name_err").innerHTML="";
                }else{
                 document.getElementById("name_err").innerHTML= "**Invalid Name";
                 return false;
                }

                if(regx2.test(mobile) && mobile.length=="10" ) {
                  document.getElementById("mobile_err").innerHTML="";
                }else{
                 document.getElementById("mobile_err").innerHTML= "**Invalid Mobile No.";
                 return false;
                }

                if(regx3.test(email) ) {
                  document.getElementById("email_err").innerHTML="";
                }else{
                 document.getElementById("email_err").innerHTML= "**Invalid Email";
                 return false;
                }

              }
            
            </script>
            </div>        
        
        </div>




</body>
</html>
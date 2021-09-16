
<!-- <php include 'call.php'?> -->
<!-- <php include 'JScontactDB.php' ?> -->

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
                  <form id="form" onsubmit="return event.preventDefault()">
                    
                    <label for="fname"><h4>FULL NAME</h4></label>
                    <input type="text" placeholder="Example Name" id="name" required onkeydown="return valid1()"><span id="err_name" ></span><br><br>
                    

                    <label for="Mobile"><h4>MOBILE</h4></label>
                    <input type="text" placeholder="1234567890" id="mobile" required onkeydown="return valid2()"><span id="err_mobile"></span><br><br>
                    

                    <label for="Email"><h4>EMAIL</h4></label>
                    <input type="text" placeholder="example@mail.com" id="email" required onkeydown="return valid3()"><span id="err_email"></span><br><br>
                   

                    <label for="Message"><h4>MESSAGE</h4></label>
                    <textarea placeholder="Some Message" name="msg"></textarea><br>

                    <input type="button" value="Back" name="back">
                    <input type="submit" value="Submit" name="submit">
                    
                  </form>

              </div>
             
              <script>
                 function validation(){
                 var name1=vaild1();
                 var mobile1=valid2();
                 var email1=vaild3();

                 if( name1==true && mobile1==true && email1==true)
                 {
                  // return true;
                 }
                 }

               function valid1()
               {
                var form=document.getElementById("form");
                var name=document.getElementById("name").value;
                var err_name=document.getElementById("err_name");

                var regx1= /^[a-zA-Z]/;
    
                if(name.match(regx1)){
                  form.classList.add("Valid");
                  form.classList.remove("Invalid");
                  err_name.innerHTML="Name is valid";
                  err_name.style.color="green";
                }
               else{
                 form.classList.remove("Valid");
                 form.classList.add("Invalid");
                 err_name.innerHTML="Name is invalid";
                 err_name.style.color="red";
                }}

           
               function valid2()
               {
                var form=document.getElementById("form");
                var mobile=document.getElementById("mobile").value;
                var err_mobile=document.getElementById("err_mobile");
     
                var regx2= /[789]\d{9}$/ ;
                // var regx2= /^[0-9]{10}+$/;
                if(mobile.match(regx2)){
                 form.classList.add("Valid");
                 form.classList.remove("Invalid");
                 err_moblie.innerHTML="Number is valid";
                 err_mobile.style.color="green";
                }
                else{
                 form.classList.remove("Valid");
                 form.classList.add("Invalid");
                 err_mobile.innerHTML="Number is invalid";
                 err_mobile.style.color="red";
                }}

           
               function valid3()
               {
                var form=document.getElementById("form");
                var email=document.getElementById("email").value;
                var err_email=document.getElementById("err_email");
     
                var regx3=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

                if(email.match(regx3)){
                 form.classList.add("Valid");
                 form.classList.remove("Invalid");
                 err_email.innerHTML="Email is valid";
                 err_email.style.color="green";
                }
                else{
                 form.classList.remove("Valid");
                 form.classList.add("Invalid");
                 err_email.innerHTML="Email is invalid";
                 err_email.style.color="red";
                }}

    </script>
    </div>        
        
    </div>




</body>
</html>
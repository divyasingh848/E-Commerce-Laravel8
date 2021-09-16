<?php
  
   $err_name="";
   $err_num="";
   $err_email="";
   $msg="";

   function valid_name($name)
   { 
    $regex1= "/[a-zA-Z]/";
    if(!preg_match($regex1,$name) || is_null($name)==true)
     {
       $GLOBALS['err_name']= "*Invalid name";
       return false;
     }
     else
      return true;
   }


    function valid_num($mobile)
    {
     $regex2="/^[9,8,7]+[\d]/";
     if(!preg_match($regex2,$mobile) || (strlen($mobile)!=10) || is_null($mobile)==true) 
     {
      $GLOBALS['err_num']="*Invalid number";
      return false;
     }
     else
     return true;
    }
    

    function valid_email($email)
    {
     $regex3= "/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/" ;  
     if(!preg_match($regex3,$email) || is_null($email)==true)
     {
      $GLOBALS['err_email']="*Invalid email";
      return false;
     }
     else
     return true;
    }

    
  
?>
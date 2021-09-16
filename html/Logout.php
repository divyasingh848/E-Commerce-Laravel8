<?php

session_start();
// session_unset('username');
session_destroy();
header('location:Adminpanel.php');


//echo "<a href=Adminpanel.php>LOGOUT</a>";
// echo header("Adminpanel.php");


?>
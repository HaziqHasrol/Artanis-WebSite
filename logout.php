<?php 



session_start();

$username=$_SESSION["id"];

echo "<script>alert('Logout Successful!\\nBYE  ".$username."!!! ');location.href='login.php';</script>";

session_destroy();



?>
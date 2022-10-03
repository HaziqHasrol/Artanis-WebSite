<?php 



session_start();

$username=$_SESSION["id"];

echo "<script>alert('Logout Successful!\\nBYE  ".$username."!!! ');location.href='login2.php';</script>";

session_destroy();



?>
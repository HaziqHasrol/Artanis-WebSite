<?php 



session_start();

$username=$_SESSION["id"];

echo "<script>location.href='login2.php';</script>";

session_destroy();



?>
<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "login_artanis";

// Create connection
$connect = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$connect) {
  DIE("connection failed successfully " );
}

?>
<?php
  session_start();
  if(empty($_SESSION["username"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
    header("LOCATION:login2.php"); /* REDIRECT USER TO LOGIN PAGE */
  }
//   else{
//     header("LOCATION:artanis_page.php");
//   }
?>
<?php session_start();?>


<html>

    
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Silkscreen&display=swap');



body {
    color:white;
    background-image: linear-gradient(45deg,#131618 55%	,#000000 55% , rgb(63, 76, 119)75%  );
    font-family: 'Silkscreen', cursive;
    /* background: linear-gradient(60deg, rgb(32, 38, 57) 40% , rgb(63, 76, 119)50% ); */
}


form {
    text-align:center;   
    border: 3px solid #f1f1f1;
    width:50%;
    height:570px;
    display:inline-block;
    margin-left:300px;
}

input {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  /* box-sizing: border-box; */
  font-family: 'Silkscreen', cursive;
}

button {
    text-align:center;
  background-color: black;
  color: white;
  padding-top:20px;
  padding-bottom:20px;
  margin-top:30px;
  /* padding: 14px 20px; */
  /* margin: 8px 0; */
  border: none;
  cursor: pointer;
  width: 100%;
  font-family: 'Silkscreen', cursive;
}

button:hover {
  background-color:rgb(63, 76, 119);
}

.container {
  padding: 16px;
}

.image{
    padding-top:50px;
}


</style>
<head>
    <title>Login Page</title>
</head>
<body >



<form action="" method="post">
  <div>
    <img src="aclogo.png" alt="Avatar" class="image" >
  </div>

  <h2>Login</h2>

  <div class="container">
    <label for="uname"><b>Username  :</b></label>
    <input type="text" name="id" id="userName" placeholder="Enter Username" required>
</div>
<div class="container">
    <label for="psw"><b>Password    :</b></label>
    <input type="password" name="password" id="pwd" placeholder="Enter Password" required>        
    <button type="submit" name="login" >Login</button>

  </div>
</form>

<?php
        
        include 'dbconnect.artanis.php';
        

        if(isset($_POST['login'])){
            
            $username = $_POST['id'];
            $password = $_POST['password'];
            
            

            $query = "SELECT id,password
            FROM artanis
            WHERE id = '$username'
            AND password = '$password'";
        
            $sendsql = mysqli_query($connect, $query); 
            $data = mysqli_fetch_array($sendsql);

            
    
            if(mysqli_num_rows($sendsql) != 0){
                $_SESSION["id"]=$username;
                echo "<script>alert('Login Successful!\\nWelcome ".$username."!!!');location.href='test4.php';</script>";
                
            } 
            else
                echo"<script>alert('ERORR!!\\ Username or password not match/exist')</script>";
        }
            
    ?>


</body>
</html>

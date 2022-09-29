<?php session_start();?>
<html>

<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* video background */
#myVideo {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    /* box-shadow: 5px 5px #D4D4D4; */
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 60%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding: 20px 10px 20px 10px;
    color: #555;
    text-align: center;
    font-family:;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    border-radius: 20px;
    padding: 10px 15px 10px 0px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: 0px 0px 8px 10px #888888;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}


/* input button for login */
 input[type=submit] {
  background-color: #007185;
  color: white;
  padding: 16px 32px;
  margin: 4px 2px;
  cursor: pointer;
  text-align:center;
  width:40%;
  margin-left:90px;
  margin-top:50px;
  box-shadow: 3px 3px 3px 3px #9e9e9e;
  
}
input[type=submit]:hover {
            color: #111;
            background: ;
            box-shadow: 0 0 50px #2193b0;
        }

    
</style>
    <head>
        <title>Log In</title>
        <video autoplay muted loop id="myVideo">
            <source src="waknat.mp4" type="video/mp4">
        </video>


    </head>
<body>

    <form action="" method="post">
    <div class="wrapper">
        <div class="logo">
            <img src="logo.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            LOGIN
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="id" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <input type="submit" name="login"class="button"  value="login" ></input>
        </form>
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
                echo "<script>alert('Login Successful!\\nWelcome ".$username."!!!');location.href='test2.php';</script>";
                
            } 
            else
                echo"<script>alert('ERORR!!\\ Username or password not match/exist')</script>";
        }
            
    ?>
</body>


</html>
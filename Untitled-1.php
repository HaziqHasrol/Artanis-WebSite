<!DOCTYPE html>

<html>
    <style>
html, body {
  width: 100%;
  height:100%;
  
}

body {
    text-align: center;
    background: repeating-linear-gradient(
    -55deg,
    #1f1fff,
    #333 20px,
    grey 25px,
    #222 30px),
    url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/old_map_@2X.png);
    
}

/* ac picture*/
@keyframes clip1{
  0%{clip-path: polygon(-100% -150%, -50% -150%, -150% -50%, -200% -50%);}
  100%{clip-path: polygon(150% 50%, 200% 50%, 100% 150%, 50% 150%);}
}


.my{  
  background-image: url("aclogo.png");
  transform-origin:center;
  filter: blur(2px);
  -webkit-filter: blur(2px);
  height: 50%; 
  width: 50%;
  margin: auto;
  background-position: center;
  background-size: cover;
}

#clip1 {
    transform: scale(1.15,1.15);
    animation:clip1 7s linear infinite;  
}

.title{
    text-transform: uppercase;
    font-size: 96px;
    font-family: 'verdana', cursive; 
    color:white;
    text-shadow:5px 5px black;
          
  }

.module {
  
    background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
    background-size: 400% 400%;
    animation: gradient 10s ease infinite;
  border: 1px solid #ccc;
  margin: 3%;
  > h2 {
    padding: 1rem;
    margin: 0 0 0.5rem 0;
  }
  > p {
    padding: 0 1rem;
  }
}

@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap');

.stripe-4 {
  font-family: 'Montserrat', sans-serif;
  color: white;
  background:silver;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  letter-spacing: 2px;
  

}
/* .stripe-4 {
  color: black;
  background: repeating-linear-gradient(
    45deg,
    transparent,
    transparent 10px,
    #ccc 10px,
    #ccc 20px
  ),
  linear-gradient(
    to bottom,
    #eee,
    #999
  ) */




}
  

/*  */

.text{
    text-align: center;
    font-size: 20px;
}


/* button glitch*/
.button-49,
.button-49:after {
  width: 250px;
  height: 100px;
  line-height: 100px;
  font-size: 11px;
  font-family: 'Bebas Neue', sans-serif;
  font-weight: bolder;
  background: linear-gradient(45deg, transparent 10%, #e4e0d4 10%);
  color: black;
  letter-spacing: 1px;
  outline: transparent;
  border: outset ;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-49:after {
  --slice-0: inset(50% 50% 50% 50%);
  --slice-1: inset(80% -6px 0 0);
  --slice-2: inset(50% -6px 30% 0);
  --slice-3: inset(10% -6px 85% 0);
  --slice-4: inset(40% -6px 43% 0);
  --slice-5: inset(80% -6px 5% 0);
  
  content: 'ALTERNATE TEXT';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, transparent 8%, #00E6F6 10%, #00E6F6 10%, #e4e0d4 10%);
  text-shadow: -3px -3px 0px red, 3px 3px 0px #00E6F6;
  clip-path: var(--slice-0);
}

.button-49:hover:after {
  animation: 1s glitch;
  animation-timing-function: steps(2, end);
}

@keyframes glitch {
  0% {
    clip-path: var(--slice-1);
    transform: translate(-20px, -10px);
  }
  10% {
    clip-path: var(--slice-3);
    transform: translate(10px, 10px);
  }
  20% {
    clip-path: var(--slice-1);
    transform: translate(-10px, 10px);
  }
  30% {
    clip-path: var(--slice-3);
    transform: translate(0px, 5px);
  }
  40% {
    clip-path: var(--slice-2);
    transform: translate(-5px, 0px);
  }
  50% {
    clip-path: var(--slice-3);
    transform: translate(5px, 0px);
  }
  60% {
    clip-path: var(--slice-4);
    transform: translate(5px, 10px);
  }
  70% {
    clip-path: var(--slice-2);
    transform: translate(-10px, 10px);
  }
  80% {
    clip-path: var(--slice-5);
    transform: translate(20px, -10px);
  }
  90% {
    clip-path: var(--slice-1);
    transform: translate(-10px, 0px);
  }
  100% {
    clip-path: var(--slice-1);
    transform: translate(0);
  }
}

@media (min-width: 768px) {
  .button-49,
  .button-49:after {
    width: 200px;
    height: 86px;
    line-height: 88px;
  }
}


</style>
<header>
    <title>Artanis Cloud</title>
    <b class="title"> artanis cloud </b>   
</header>

<body>
    <div id="clip1" class="my"></div>
    <div class="stripe-4">
      <h1 style="size:50px ;">NEVER STOP EXPLORING</h1>   
      <h2 >Artanis Cloud is a software development company on Artificial Intelligence.</h2>
    </div>
   
  
    <button class="button-49" onclick="window.location.href='https://www.artaniscloud.com/'">GO TO ARTANIS CLOUD.COM</button>
    <button class="button-49" onclick="window.location.href='http://localhost/artanis%20test/login.php'">GO TO DEV.EZRAN.MY</button>
    <button class="button-49" onclick="window.location.href='https://elixirush.com/'">GO TO ELIXIRUSH.COM</button>
    <button class="button-49" onclick="window.location.href='https://lootbox.my/'">GO TO LOOTBOX.MY</button>
    
    
    
    <?php
     include 'dbconnect.artanis.php';
     ?>


</body>

</html>
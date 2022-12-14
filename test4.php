
<?php
    include 'dbconnect.artanis.php'   
    ?>
<!DOCTYPE html>
<html>  
<script src="https://kit.fontawesome.com/539ec32f1f.js" crossorigin="anonymous"></script>
<style>



@import url('https://fonts.googleapis.com/css2?family=Princess+Sofia&display=swap');


/* background video */
#myVideo {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}


/* HEADING */
.heading {
  text-align: center;
}



/* CARDS */
.cards {
  display: flex;
  flex-wrap: wrap;
  margin:0;
  padding:0;
}

.card {
  margin: 20px;
  padding-top: 20px;
  margin:30px 70px 30px;
  width: 400px;
  min-height: 200px;
  border-radius: 20px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s;
  text-align: center;
  font-size: 18px;
}

/* .card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.06);
  box-shadow: 0 0 100px #c1f9a2;
} */

 .card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.06);
  box-shadow: 0 0 100px #c1f9a2;
  width: 500px;
  height: 200px;
  font-size: 16px;
  font-family: 'Bebas Neue', sans-serif;
  font-weight: bolder;
  background: linear-gradient(45deg, transparent 10%, #e4e0d4 10%);
  color: black;
  outline: transparent;
  border: outset ;
  position: relative;
} 

.card__link,.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}




.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
  font-weight: bold;
  text-shadow:1px 2px black;
  padding-top:30px;
}


/* CARD BACKGROUNDS color */
.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
  cursor: pointer;
}

.card-2 {
  background: radial-gradient(#fbc1cc, #fa99b2);
  cursor: pointer;
}

.card-3 {
  background: radial-gradient(#76b2fe, #b69efe);
  cursor: pointer;
}

.card-4 {
  background: radial-gradient(#60efbc, #58d5c9);
  cursor: pointer;
}

.card-5 {
  background: radial-gradient(#f588d8, #c0a3e5);
  cursor: pointer;
}

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}

/* aclogo */
      .GFG {
            
            border-radius: 10%;
            cursor: pointer;
        }
          
        .GFG:hover {
            color: #111;
            box-shadow: 0 0 100px #c1f9a2;
            
            }
 
.button{


color:white;
 width:auto; 
border-radius: 10%;
cursor: pointer;
size:30%;
position:absolute;
padding-left:60px;
padding-top:40px;
border-radius: 10%;
}
.button :hover{

  color: white;
  font-size:70px;
}



        
</style>


    <head>
      <title>Artanis Cloud Project</title>
        <!-- The video background -->
        <video autoplay muted loop id="myVideo">
            <source src="glitch3.mp4" type="video/mp4">
        </video>
        
    </head> 

    
    <body >

    <div class="button">  
    <i name="logout" class="fa-solid fa-right-to-bracket fa-3x" onclick="window.location.href='logout.php'" ></i>
    </div>

<div class="main-container"> 
  
  <div class="heading">
  <img class="GFG" src="aclogo.png" style="text-align:center;"onclick="window.location.href='http://localhost/artanis%20test/test.php'">
  </div>
  
<div class="cards">

    <div class="card card-1" onclick="window.location.href='//acesv2.ezran.my/'" >  
      <h2 class="card__title" >ACES | 4.0 version 2</h2>
    </div>

    <div class="card card-2" onclick="window.location.href='https://www.showcar.ezran.my/'">
      <h2 class="card__title">Portal Show Car</h2>
    </div>
    
    <div class="card card-3" onclick="window.location.href='https://htckl-mockup-1.ezran.my/'" >
      <h2 class="card__title">Portal HTCKL 2.0</h2>
    </div>

    <div class="card card-4" onclick="window.location.href='https://webpro.aces.ecerdc.com.my/'" >
      <h2 class="card__title">ACES | 4.0 PRO version </h2>
    </div>

    <div class="card card-5" onclick="window.location.href='https://ekilang.ezran.my/'">
      <h2 class="card__title">e-Kilang Malaysian Plam Oil Board (MPOB)</h2>
    </div>

    <div class="card card-1"  onclick="window.location.href='https://www.unescoihp.ezran.my/'">
      <h2 class="card__title">Portal UNESCO |HP Malaysia</h2>
    </div>

    <div class="card card-1" onclick="window.location.href='https://www.ekbk.ezran.my/'">
      <h2 class="card__title">e-KBK Jabatan Perhutanan Semenanjung Malaysia (JPSM) </h2>
    </div>

    <div class="card card-2" onclick="window.location.href='https://www.doe.gov.my/'">
      <h2 class="card__title">Portal Jabatan Alam Sekitar (JAS) </h2>
    </div>
    
    <div class="card card-3" onclick="window.location.href='https://www.asset-management.ezran.my/login'">
      <h2 class="card__title">Asset Management R&D</h2>
    </div>

    <div class="card card-4" onclick="window.location.href='https://www.upen.ezran.my/'">
      <h2 class="card__title">Sistem Bantuan Kewangan Rumah Ibadat Selain Islam (RISI)<br> Unit Perancang Ekonomi Negeri (UPEN) Selangor </h2>
    </div>

    <div class="card card-5" onclick="window.location.href='https://vms.icep.com.my/'">
      <h2 class="card__title">Venue Management System <br> International Conference and Exhibition Professionals (iCEP)</h2>
    </div>

    <div class="card card-1" onclick="window.location.href='https://www.ecost.ezran.my/'">
      <h2 class="card__title">e-Cost <br>Malaysian Palm Oil Board (MPOB)</h2>
    </div>

    <div class="card card-1" onclick="window.location.href='https://dev.ezran.my/marketplace/home'">
      <h2 class="card__title">Marketplace</h2>
    </div>

    <div class="card card-2" onclick="window.location.href='https://webapp.aces.ecerdc.com.my/'">
      <h2 class="card__title">ACES |4.0</h2>
    </div>
    
    <div class="card card-3" onclick="window.location.href='https://www.istiadat.gov.my//'">
      <h2 class="card__title">Portal Bahagian Istiadat Dan Urusetia Antarabangsa (BIUPA)</h2>
    </div>

    <div class="card card-4" onclick="window.location.href='https://espatial.ezran.my/'">
      <h2 class="card__title">e-Spatial <br> Jabatan Perhutanan Semenanjung Malaysia (JPSM) </h2>
    </div>

    <div class="card card-5" onclick="window.location.href='https://edeclare.ezran.my/'">
      <h2 class="card__title">e-Declare <br> Malaysian Communications and Multimedia Commission (MCMC)</h2>
    </div>

    <div class="card card-1" onclick="window.location.href='https://www.rurallink.gov.my/'">
      <h2 class="card__title">Portal Kementerian Pembangunan Luar Bandar(KPLB) </h2>
    </div>

    <div class="card card-1" onclick="window.location.href='https://pokli.com.my/'">
      <h2 class="card__title">POKLI e-Commerce</h2>
    </div>

    <div class="card card-2" onclick="window.location.href='https://htckl.water.gov.my/'">
      <h2 class="card__title">Portal Humid Tropics Center Kuala Lumpur (HTCKL) </h2>
    </div>
    
    <div class="card card-3" onclick="window.location.href='https://ezran.my/mms2/login.php'"> 
      <h2 class="card__title">Maintenance Management System</h2>
    </div>

    <div class="card card-4" onclick="window.location.href='https://mygdx.malaysia.gov.my/ms'">
      <h2 class="card__title">MAMPU MyGDX </h2>
    </div>

    <div class="card card-5" onclick="window.location.href='http://waris.water.gov.my/'">  
      <h2 class="card__title">Water Resource Index System </h2>  
    </div>

    <div class="card card-1" onclick="window.location.href='https://ezran.my/drone/'">   
      <h2 class="card__title">CAAM Drone</h2>     
    </div>

  </div>
</div>

    </body>
</html>
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
  padding: 20px;
  width: 500px;
  min-height: 200px;
  border-radius: 40px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s;
  text-align: center;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.06);
  
}

.card__link,.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.card__icon {
  grid-row: 2/3;
  font-size: 20px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
  font-weight: bold;
  text-shadow:1px 1px black;
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
            /* width: 200px;
            height: 250px;
            margin-left: 550px; */
            border-radius: 10%;
            cursor: pointer;
        }
          
        .GFG:hover {
            color: #111;
            box-shadow: 0 0 100px #aeffc1;
        }
 
.button{

width:50%;
border-radius: 10%;
cursor: pointer;
size:30%;
position:absolute;
padding-left:60px;
padding-top:40px;
border-radius: 10%;
}
.button :hover{

  
  font-size:60px;
  color: #111;
  box-shadow: 0 0 100px #ffffcc;
  border-radius: 10%;
}

#myImage{
    object-fit: cover; 
     position: fixed;
     width: 100%;
    height: 100%;



}

        
</style>


    <head>
      <title>Artanis Cloud Project</title>
        <!-- The video background -->
        <!-- <video autoplay muted loop id="myVideo">
            <source src="background.mp4" type="video/mp4">
        </video>
         --><div id="myImage">         
                <img src="chiron.jpg" alt="">
            </div>
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

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title" >ACES | 4.0 version 2</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='//acesv2.ezran.my/'">GO Now !! &#128525; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-2" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal Show Car</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.showcar.ezran.my/'">GO now !!  &#128512;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    
    <div class="card card-3" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal HTCKL 2.0</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://htckl-mockup-1.ezran.my/'">GO now !! &#128536;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-4" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">ACES | 4.0 PRO version </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://webpro.aces.ecerdc.com.my/'">GO now !! &#128523; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-5" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">e-Kilang Malaysian Plam Oil Board (MPOB)</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://ekilang.ezran.my/'">GO now !! &#128518;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal UNESCO |HP Malaysia</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.unescoihp.ezran.my/'">GO now !! &#128513;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">e-KBK Jabatan Perhutanan Semenanjung Malaysia (JPSM) </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.ekbk.ezran.my/'">GO Now !! &#128525; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-2" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal Jabatan Alam Sekitar (JAS) </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.doe.gov.my/'">GO now !!  &#128512;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    
    <div class="card card-3" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Asset Management R&D</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.asset-management.ezran.my/login'">GO now !! &#128536;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-4" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Sistem Bantuan Kewangan Rumah Ibadat Selain Islam (RISI)<br> Unit Perancang Ekonomi Negeri (UPEN) Selangor </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.upen.ezran.my/'">GO now !! &#128523; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-5" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Venue Management System <br> International Conference and Exhibition Professionals (iCEP)</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://vms.icep.com.my/'">GO now !! &#128518;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">e-Cost <br>Malaysian Palm Oil Board (MPOB)</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.ecost.ezran.my/'">GO now !! &#128513;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Marketplace</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://dev.ezran.my/marketplace/home'">GO Now !! &#128525; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-2" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">ACES |4.0</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://webapp.aces.ecerdc.com.my/'">GO now !!  &#128512;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    
    <div class="card card-3" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal Bahagian Istiadat Dan Urusetia Antarabangsa (BIUPA)</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.istiadat.gov.my//'">GO now !! &#128536;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-4" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">e-Spatial <br> Jabatan Perhutanan Semenanjung Malaysia (JPSM) </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://espatial.ezran.my/'">GO now !! &#128523; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-5" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">e-Declare <br> Malaysian Communications and Multimedia Commission (MCMC)</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://edeclare.ezran.my/'">GO now !! &#128518;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal Kementerian Pembangunan Luar Bandar(KPLB) </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://www.rurallink.gov.my/'">GO now !! &#128513;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">POKLI e-Commerce</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://pokli.com.my/'">GO Now !! &#128525; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-2" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Portal Humid Tropics Center Kuala Lumpur (HTCKL) </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://htckl.water.gov.my/'">GO now !!  &#128512;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>
    
    <div class="card card-3" > 
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Maintenance Management System</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://ezran.my/mms2/login.php'">GO now !! &#128536;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-4" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">MAMPU MyGDX </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://mygdx.malaysia.gov.my/ms'">GO now !! &#128523; <i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-5" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">Water Resource Index System </h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='http://waris.water.gov.my/'">GO now !! &#128518;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

    <div class="card card-1" >
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <h2 class="card__title">CAAM Drone</h2>
      <p class="card__apply">
        <a class="card__link" href="#" onclick="window.location.href='https://ezran.my/drone/'">GO now !! &#128513;<i class="fas fa-arrow-right"></i></a>
      </p>
    </div>

  </div>
</div>

    </body>

    <?php
    
     include 'dbconnect.artanis.php';
     ?>

</html>
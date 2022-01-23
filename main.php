<?php

session_start();  ?>
<!DOCTYPE html>
<html>
<head>
    <title>bienvenue resto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylefooter.css">
    <script src="main.js" defer></script>
    <link rel="stylesheet" href="stylenav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
	    body{
	    	background-image: url(image/back.jpg);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
    .gmap_canvas {
          overflow:hidden;
        background:none!important;
        height:430px;
        width:100%;

      }
   </style>


</head>

<body>
<h1 id="a"></h1>

<section id="banner">
<nav class='menu1'>
   <div class="row" > 
      <div class="logo"> <a href="main.php"><img src="images/ww.png"  class="logo" ></a> </div>
        <ul class="bar"> 
            <li><a href="main.php" >Accueil</a></li>
            <li><a href="categories.php">Catégories</a></li>
            <li><a href="plats.php">Plats</a></li>
            <li><a href="verif.php">Reservation</a></li>
            <li><a href="#p">À propos</a></li>
            <li ><a href="#c">Contact</a></li>

        </ul>     
    </div>    
    <div class="myaccount">
    <?php

if (isset($_SESSION['user'])) {
    echo '<li><a class="bienvenue"  href="viewres.php">Mon Profil</a></li>
    <li><a class="signin"  href="logout.php"> déconnecter</a></li>';
} else {
    echo '<li><a class="signin" href="interface_login.php"> se connecter</a></li>
    <li><a class="sign" href="interface_register.php">s inscrire</a></li>';
}

?>

   </div> 
  </nav>

  
 </section>
 <div>
 <div class="slidershow ">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="img/blog-post.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="1.jpg" alt="">
        </div>
      </div>
      <div>
  <?php
 
if(isset($_GET['msg'])){

  if($_GET['msg'] == "success"){ 
    echo '<h5 class="bg-success text-center" style="color:green;">Vous êtes authentifié! </h5>';
  }
}  

  ?> 

      <div class="navigation">
        <label for="r1" class="bar1"></label>
        <label for="r2" class="bar1"></label>
        <label for="r3" class="bar1"></label>
        <label for="r4" class="bar1"></label>
        <label for="r5" class="bar1"></label>
      </div>
    </div>
    <h1 id="p"></h1>
  <?php require('about-us.php'); ?>

  <section class="map" id="footer">
 <div class="gmap_canvas">
  <iframe style= "width:100%;  height:430px; "id="gmap_canvas" src="https://maps.google.com/maps?q=Amigos%20Lounge%20&%20Restaurant%20tunisia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    </iframe>
    

      
</div>
        </section >

  
  <?php require('footer.php'); ?>
  

</body>

</html>
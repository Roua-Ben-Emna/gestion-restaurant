
<nav class='menu1'>
   <div class="row" > 
      <div class="logo"> <a href="main.php"><img src="images/ww.png"  class="logo" ></a> </div>
        <ul class="bar"> 
            <li><a href="main.php" >Accueil</a></li>
            <li><a href="categories.php">Catégories</a></li>
            <li><a href="plats.php">Plats</a></li>
            <li><a href="verif.php">Reservation</a></li>
        
            <li ><a href="#c">Contact</a></li>

        </ul>     
    </div>    
    <div class="myaccount">
    <?php

if (isset($_SESSION['user'])) {
    echo '<li><a class="bienvenue"  href="viewres.php"> Mon Profil</a></li>
    <li><a class="signin"  href="logout.php"> déconnecter</a></li>';
} else {
    echo '<li><a class="signin" href="interface_login.php"> se connecter</a></li>
    <li><a class="sign" href="interface_register.php">s inscrire</a></li>';
}

?>

   </div> 
  </nav>

  
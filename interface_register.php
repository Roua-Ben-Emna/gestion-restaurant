
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="stylenav.css">
	<link rel="stylesheet" href="style_formulaire.css">
	<link rel="stylesheet" href="stylefooter.css">

	
</head>
<body>
<section id="b">
<nav class='menu1'>
   <div class="row" > 
      <div class="logo"> <a href="main.php"><img src="images/ww.png"  class="logo" ></a> </div>   
    </div>    
 

  </nav>
</section>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<section class="register">
	
	    <div class="modal-content center">
    
	    <div class="box1">
		<div class="t">
	      <h4><center>Inscrivez-vous ici!</center></h4>
          </div>		
		    <?php

if(isset($_GET['msg'])){
	if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
		echo '<center><h5 class="bg-danger text-center" style="color:red;">cette adresse email existe déjà</h5></center>';
	}
	if($_GET['msg'] == "error2"){ 
		echo '<center><h5 class="bg-success text-center" style="color:red;">Il y a eu un problème sur le serveur! Veuillez réessayer après un certain temps! </h5></center>';
	}
}  

?>

	      <form   method="POST" action="register.php">
              <label for="name_reg">Nom et Prenom</label>
	          <input " id="name_reg" type="text" name='name' pattern="[A-Za-z ]{1,50}"required placeholder="Entrer votre nom et prenom ">
              
			  <label for="email_reg">Email</label>
	          <input  id="email_reg" type="email" name='email' pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required placeholder="Entrer votre adresse mail">

              <label >adresse</label>
	          <input type="text" name='address'placeholder="Entrer votre adresse">

              <label for="tel">telephone</label>
	          <input  type="tel" class="validate" pattern=[23457][0-9]{7} required name='phone'placeholder="numéro de telephone ">
         
              <label for="password">mot de passe</label>
	          <input id="password" type="password" name='password' minlength="4" required  placeholder="Entrer votre mot de passe">
	          
          <button type="submit" class="shiny-btn">S'inscrire</button>
		  <br>	<a href="interface_login.php" style="color : orange ;">Se connecter</a><h>
	      </form>

	  </div>
  </section>

<?php require('footer.php'); ?>
</body>
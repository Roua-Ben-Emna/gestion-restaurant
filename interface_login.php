<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> se connecter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="style_formulaire.css">
	<link rel="stylesheet" href="stylenav.css">
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

<section class="login">
	   <div class="box">
	   
 <div class="t">
        <h4><center>Heureux de vous revoir</center></h4>
    </div>
	<?php

if(isset($_GET['msg'])){
	  if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
		  echo '<center><h5 class="bg-danger text-center" style="color:red;">Mot de passe incorrect</h5></center>';
	  }
	  if($_GET['msg'] == "error2"){ 
		  echo '<center><h5 class="bg-success text-center" style="color:red;">Aucun email n a été trouvé! </h5></center>';
	  }
	  if($_GET['msg'] == "enreg"){ 
		echo '<center><h5 class="bg-success text-center" style="color:green;">Vous avez été enregistré! </h5></center>';
	}
	if($_GET['msg'] == "mdp"){ 
		echo '<center><h5 class="bg-success text-center" style="color:green;">mot de passe changée avec succée </h5></center>';
	}
  }  

?>
	      <form   method="POST" action="login.php">
	 

                <label for="email">Email</label><br>
	            <input id="email_login" type="email" name="email"  placeholder="Entrer votre adresse mail" required>
                <br>
				<label for="password">mot de passe</label><br>
	            <input id="password_login" type="password" name="password" placeholder="Entrer votre mot de passe" required><br>
				<a href="interface_mdp.php" style="color : orange ;">mot de passe oublier ?</a>
				<br>
				
          <button type="submit" class="shiny-btn">connexion</button>
		  <br>
	      <br>	<h>Vous n'avez pas de compte? <a href="interface_register.php" style="color : orange ;">S'inscrire</a><h>
	      </form>	

		   </div> 
  </section>
 
<?php require('footer.php'); ?>
</body>
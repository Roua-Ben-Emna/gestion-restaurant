<h1 id="cc"></h1>
<div class="cont">  

  <form id="contact" action="envoyer.php" method="post">
    <center><h3>Contact</h3></center>
    <center><h4>Nous contacter</h4></center>
	<?php

if(isset($_GET['msg'])){
	  if($_GET['msg'] == "succes") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
		  echo '<center><h5 class="bg-danger text-center" style="color:green;">Message envoyé</5></center>';
	  }
	  if($_GET['msg'] == "error"){ 
		  echo '<center><h5 class="bg-success text-center" style="color:darkred;">erreur! </h5></center>';
	  }

  }  

?>
  
      <input placeholder="Votre nom" type="text" tabindex="1" required autofocus name="nom">
  
   
      <input placeholder="Votre adresse email" type="email" tabindex="2" required name="email">



      <textarea placeholder="Tapez votre message ici...." tabindex="5" required name="msg"></textarea>

    <fieldset>
      <button name="Envoyer" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
    
  </form>
</div>

<?php

require('connection-pdo.php');
session_start();

        if (isset($_POST['email'])){
            $email=$_POST['email'];
            $_SESSION['email']=$email;

            $sql="SELECT * FROM users WHERE email='" . $email . "'";

			try{
			
                $result=mysqli_query($conn,$sql);
                if ($result=mysqli_query($conn,$sql))
                {
                // Return the number of rows in result set
                $rowcount=mysqli_num_rows($result);
            
                }
              
                if($rowcount==1){
                    $user = mysqli_fetch_array($result);
                    $_SESSION['email'] = $email;
                    $_SESSION['nom'] = $user['name'];
                    $nom=$user['name'];
                    $code=mt_rand(1000,9999);
                    $sql="UPDATE users SET code= '" . $code . "' WHERE email='" . $email . "'";
                    $result=mysqli_query($conn,$sql);
                    $email1="roua.benamna@etudiant-isi.utm.tn";    
                    $dest = $email;
                    $sujet = "Réinitialisation du mot de passe";
                    $corp =" Bonjour $nom \n voici votre code de verification  :$code " ;
                    $headers = 'From: ' .$email1 . "\r\n".'Reply-To: ' . $email1. "\r\n".'X-Mailer: PHP/' . phpversion();
                
               
                    if (mail($dest, $sujet, $corp, $headers)) {
                        echo 'Email envoyé avec succès  ...';
                        $message ="Email envoyé avec succès  ...";
                        header("Location:verifpassword.php?msg=succes");

               

                    } 
                    else {
                    
                        header("Location:interface_mdp.php?msg=error2");
                         
                    }
                   
                }else{header("Location:interface_mdp.php?msg=error");

                }
		    }
			catch (Exception $e){
		
                
            }
        } 



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Three Amigos </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="style_formulaire.css">
 
 
</head>

<body>


    <?php
	

      if(isset($_GET['msg'])){
          if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
              echo '<center><h3 class="bg-danger text-center" style="color:red;">cette adresse email n est existe pas !</h3></center>';
          }
          if($_GET['msg'] == "error2") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<center><h3 class="bg-danger text-center" style="color:red;">Échec de l envoi de l email...</h3></center>';
        }


      }  
      
     


?>


  
                                    
<div class="box">
                                    <form action="" method="POST"> 
                                    <div class="t1">
        <h4><center>Mot de passe oublié !</center></h4>
    </div>                                                                                                                         
                                                <label  for="email">Adresse mail:</label>
                                                <input c type="email" name="email" id="email"  placeholder="Entrer l'adresse mail" required>                                     
                                                <button type="submit" class="shiny-btn">Envoyer</button>                                                                                                                                                                                                                                                         
                                                <button type="reset" class="shiny-btn">Annuler</button>                              
                                    </form>
                                <center> <a href="interface_login.php" style="color : orange ;">retour</a></center>
                                    </div>
                                   
                                   
</body>
</html>
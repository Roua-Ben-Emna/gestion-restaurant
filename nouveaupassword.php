<?php

require('connection-pdo.php');
    session_start();

    if (isset($_POST['password'])){
        $email=$_SESSION['email'] ;
        $password=$_POST['password'];
        if($_POST['confpassword']==$password){
            $sql="UPDATE users SET password= '" . $password . "' WHERE email='" . $email . "'";
            
            $result=mysqli_query($conn,$sql);
        
            if($result=mysqli_query($conn,$sql)) {
            
                header("Location: interface_login.php?msg=mdp");
            }
            else{
       
                header("Location: nouveaupassword.php?msg=error2");
            }
        }
        else {
   
            header("Location: nouveaupassword.php?msg=error");
			}
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>resto </title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="style_formulaire.css">
	<link rel="stylesheet" href="stylenav.css">
</head>

<body>


                          
     <div class="box">
     <div class="t1">
        <h4><center>Nouveau mot de passe</center></h4>
    </div>
    
    <?php
	

    if(isset($_GET['msg'])){
        if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<center><h3 class="bg-danger text-center" style="color:red;">mot de passe incorrect !</h3></center>';
        }
        if($_GET['msg'] == "error2") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<center><h3 class="bg-danger text-center" style="color:red;">Echec</h3></center>';
        }

    }
?>
        <form action="" method="POST"> 

                <label class="small mb-1" for="password">Mot de passe:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Entrer le mot de passe">
                <label class="small mb-1" for="confpassword">Verifier Mot de passe:</label>              
                <input class="form-control" type="password" name="confpassword" id="confpassword" placeholder="Confirmer le mot de passe">
                <button type="submit" class="shiny-btn">Envoyer</button>                                                                                                                                                                                                                                                         
                 <button type="reset" class="shiny-btn">Annuler</button> 
                                              
        </form>
                           
        </div>
    </body>
</html>

    <?php

require('connection-pdo.php');
session_start();

    if (isset($_POST['code'])){

        $email=$_SESSION['email'];
        $code=$_POST['code'];
        $sql="SELECT * FROM users WHERE email='" . $email . "' && code = '". $code."'";
               
                try{
                    $result=mysqli_query($conn,$sql);
                    if ($result=mysqli_query($conn,$sql))
                    {
                    // Return the number of rows in result set
                    $rowcount=mysqli_num_rows($result);
                
                    }
                  
                    if($rowcount==1){
                        $user = mysqli_fetch_array($result);
                        header("Location: nouveaupassword.php");
                    }  
                    else{
             
                
                        header("Location: verifpassword.php?msg=error");
                    }
                }
                catch (Exception $e){
                    
                    header("Location: login.php");
                }
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Three Amigos</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="style_formulaire.css">
	<link rel="stylesheet" href="stylenav.css">
</head>

<body>


    
 
                          
                                    <div class="box">
                                    <div class="t1">
        <h4><center>Code de vérification</center></h4>  </div>
        <?php
	

    if(isset($_GET['msg'])){
        if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<center><h3 class="bg-danger text-center" style="color:red;">code invalid !  ...</h3></center>';
        }
        if($_GET['msg'] == "succes") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
            echo '<center><h3 class="bg-danger text-center" style="color:green;">veuillez vérifier votre email ...</h3></center>';
        }

    }  
    
   


?>
                                    <form action="" method="POST">
                                            <label class="small mb-1" for="code">code de verification:</label>   
                                            <input class="form-control" type="int" name="code" id="code"  placeholder="Entrer le code">
                                            <button type="submit" class="shiny-btn">Envoyer</button>                                                                                                                                                                                                                                                         
                                            <button type="reset" class="shiny-btn">Annuler</button>  
                                    </form> 
                                    <center> <a href="interface_login.php" style="color : orange ;">retour</a></center>
                                    </div>
                                   
</body>
</html>
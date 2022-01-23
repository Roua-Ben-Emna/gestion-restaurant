<?php
session_start();
$msg_error='';
if(isset($_SESSION['msg']))
{
    $msg_error=$_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
    body{
    background: white;
}
#login-page{
    width:400px;
    margin:0 auto;
    margin-top:10%;
  
}

form {
    width:100%;
    color:white;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background-color:#282d32;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#login-page h4{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
    text-align:center;
    font-family: arial;
}


input[type=email], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
.btn{ text-decoration: none;
	color:lightgray;
  border-radius: 4px;
  padding: 12px 28px;
  background:rgba(255, 70, 0, 1);}
    </style>
</head>
<body>


    <div id="login-page">
  
                        
                                    <form class="card-content" action="login-admin.php" method="post">
                                        <h4 class="header">connexion admin </h4>

                                        <?php

                                            if(!empty($msg_error)){
                                                echo '<div class="row error-msg">
                                                            <div class="col">
                                                                <b>'.$msg_error.'</b>
                                                            </div>
                                                        </div>';

                                            }
                                        ?>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <span for="email"><b>Email</b></span>
                                                <input name="email" id="email" type="email" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                            <span for="email"><b>Mot de passe</b></span>
                                                <input id="password" name="password" type="password" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s12">
                                                <button type="submit"  class="btn"><b>se connecter</b></button>
                                            </div>
                                        </div>

                                    </form>
        </div>
</body>
</html>
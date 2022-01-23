<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>three amigos - mon compte</title>


    <link rel="stylesheet" href="stylenav.css">
	<link rel="stylesheet" href="stylefooter.css">
    
    <style>

table {
 border-width:1px; 
 border-style:solid; 
 color:white;
 width:50%;
 background:#484848;
 }
th{
    color:darkorange; 
}
td { 
 border-width:1px;
 color:white;

 width:30%;
 text-align:center;
 }
 .avatar{

margin-top:10%
 }

 
 body {font-family: Arial, Helvetica, sans-serif;}
    </style>
    
</head>



<body>
<section>


<?php 
session_start(); 
require('nav.php'); ?>
 
</section>



<center><div class="avatar">

</div></center>
<div class="cont">
<?php
echo '<h1 class="text-center" style="color:darkorange"><br><center>Bienvenue '. $_SESSION['user'] .' sur notre site web !</center><br></h1>     
';

                

        echo '<center><h3 class="text-white bg-dark text-center"> Ici vous pouvez vérifier votre  réservations et commandes</h3><br></center>';
    
    
    if(isset($_GET['delete'])){
        if($_GET['delete'] == "error") {  
            echo '<h5 class="bg-danger text-center">Error!</h5>';
        }
        if($_GET['delete'] == "success"){ 
            echo '<h5 class="bg-success text-center" style="color:green;">L annulation a réussi </h5>';
        }
    }  
    require 'view.php';
    
 
       
?>

</div>

</body>
</html>

<!DOCTYPE html>


<html>
	<head>





		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="stylenav.css">


    </head>
	<body>
<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
header('location: res.php');} 
else { ?>
    <section id="b">

<?php require('nav.php'); ?>  
 
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br> <div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
	<p><b><center>il faut  se connecter </center></b></p></div>
<?php




}
?>


</body>
</html>
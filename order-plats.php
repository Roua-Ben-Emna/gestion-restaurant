<?php



session_start(); 
require('connection-pdo.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Plats</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

    <link rel="stylesheet" href="tab.css">
	<link rel="stylesheet" href="stylenav.css">
   
    
	
</head>
<body>

<section id="b">

<?php require('nav.php'); ?>
</section>
<br>
<br>
<br>
<br>
<br>
<br>


<?php




if (!isset($_SESSION['user']) || !isset($_SESSION['user_id'])) {
   

	echo '<div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
	<p><b><center>Vous devez dabord vous connecter pour commander!</center></b></p></div>';

	exit();
}

if (!isset($_REQUEST['id'])) {

	echo '<div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
	<p><b><center>Plats invalide! Veuillez réessayer!</center></b></p></div>';
	exit();
}

date_default_timezone_set("Asia/Kolkata");

$food_id = $_REQUEST['id'];

$user_name = $_SESSION['user'];

$user_id = $_SESSION['user_id'];

$order_id = "CM" . strval(mt_rand(100000, 999999));

$time = date("d:m:Y h:i:sa");
$nb=$_POST['nb'];
$adr=$_POST['adr'];


$sql = "INSERT INTO orders(order_id,user_id,food_id,user_name, timestamp,nb,address,status) VALUES('".$order_id."','".$user_id ."','".$food_id."','".$user_name ."','".$time ."','".$nb."','".$adr."','en cours')";

mysqli_query($conn,"SET NAMES'utf8'");
if (mysqli_query($conn,$sql)) {

	$_SESSION['msg'] = 'Order Placed! Your Order ID is : '.$order_id;

	echo '<div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
	<p><b><center>Commande passée! Votre numéro de commande est:'.$order_id.' </center></b></p>
</div>';

} else {
	echo '<div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
	<p><b><center>Plats invalide! Veuillez réessayer!</center></b></p>
</div>';


}
?>
</body>
</html>
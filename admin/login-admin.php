<?php
include_once("../connection-pdo.php");
if (!isset($_POST['email']) || !isset($_POST['password'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: index.php');

	exit();
}

$email=$_POST['email'];
$password=$_POST['password'];


$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);


if ($rowcount > 0) {
	session_start();
	$row = mysqli_fetch_array($result);
	$_SESSION['username'] = $row['name'];
    $_SESSION['msg']="connecté avec succès!";
    header('location:dashboard.php');

} else {
	session_start();
	$_SESSION['msg']="email ou mot de passe incorrecte!";
	header('location: index.php');
}



?>
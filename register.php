
<?php

require('connection-pdo.php');

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {

	$message ="Clés variables POST non valides! Actualiser la page!";
	echo "<script>alert('$message');</script>";
	require('interface_login.php');
}

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';
$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_name, $_POST['name']) || !preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['password'])) {

	$message ="Entrées invalides!";
	echo "<script>alert('$message');</script>";
	require('interface_register.php');

} else {


	$email = $_POST['email'];
	$name= $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$code=0;
	$sql = "SELECT * FROM users WHERE email='".$email."'";


	if ($result=mysqli_query($conn,$sql))
	{
	// Return the number of rows in result set
	$rowcount=mysqli_num_rows($result);

	}

	if ($rowcount!= 0) {
		$message ="cette adresse email existe déjà";
		header("Location:interface_register.php?msg=error");


	} else {

		$sql1 = "INSERT INTO users(name,email,address,phone,password,code) VALUES('".$name."','".$email."','".$address."','".$phone."','".$password ."',".$code.")";
		
	    if (mysqli_query($conn,$sql1)) {

		
			header("Location:interface_login.php?msg=enreg");
	
	    	
	    } else {
		
			header("Location:interface_register.php?msg=error2");
	    }
	}

}
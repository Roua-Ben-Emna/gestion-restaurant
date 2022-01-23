<head>
	<meta charset="UTF-8">
	<title> login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link rel="stylesheet" href="stylefooter.css">

    <link rel="stylesheet" href="style.css">
   
    
	
</head>
<?php

require('connection-pdo.php');

if (!isset($_POST['email']) || !isset($_POST['password'])) {
	$message="Invalid POST variable keys! Refresh the page!";
    echo "<script>alert('$message');</script>";}



$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['password'])) {

	       $message ="Entrées invalides!";
			echo "<script>alert('$message');</script>";
			require('interface_login.php');

} else {

	$email = $_POST['email'];

	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE email='".$email."'";


	if ($result=mysqli_query($conn,$sql))
	{
	// Return the number of rows in result set
	$rowcount=mysqli_num_rows($result);

	}
  
	if ($rowcount!= 0) {
		
		$row = mysqli_fetch_array($result);
		if ($row['password']== $password) {

			session_start();

			$_SESSION['user'] = $row['name'];
			$_SESSION['user_id'] = $row['id'];	
			$_SESSION['loggedin'] = true;			
			$_SESSION['info'] = "Vous êtes authentifié!";
			echo "<script>alert('$message');</script>";
			
			header("Location:main.php?msg=success");



		} else {
			header("Location:interface_login?msg=error");
		
		
			
		}

	} else {
		$message ="Aucun email n'a été trouvé!";
		header("Location:interface_login?msg=error2");
	

	}

}
?>

<?php require('footer.php'); ?>
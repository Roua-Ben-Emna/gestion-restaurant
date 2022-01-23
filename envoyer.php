<?php


session_start();

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		


	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	

    $sql = "INSERT INTO contact(nom,email,msg) VALUES('$nom','$email', '$msg')";
	mysqli_query($conn,"SET NAMES'utf8'");
    if ($result=mysqli_query($conn,$sql))
	{
	// Return the number of rows in result set
	$rowaff=mysqli_affected_rows($conn);

	}
    if ($rowaff==0) {
		header("Location:main.php?msg=error");
    	
    } else {


		header("Location:main.php?msg=succes");

    }


?>
<?php


session_start();
try {

    if (!file_exists('../../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../../admin/food-list.php');

	exit();
	
}

if (!isset($_POST['name']) || !isset($_POST['desc'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../../admin/food-list.php');

	exit();
}


	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$category = $_POST['category'];
	$prix = $_POST['prix'];

    $sql = "INSERT INTO food(cat_id,fname,description,prix) VALUES('$category','$name', '$desc','$prix')";
	mysqli_query($conn,"SET NAMES'utf8'");
    if ($result=mysqli_query($conn,$sql))
	{
	// Return the number of rows in result set
	$rowaff=mysqli_affected_rows($conn);

	}
    if ($rowaff==0) {
		header("Location:../../admin/food-list.php?msg=error");
    	
    } else {


		header("Location:../../admin/food-list.php?msg=succes");

    }



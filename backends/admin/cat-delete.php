<?php

session_start();
try {

    if (!file_exists('../../connection-pdo.php' ))
        throw new Exception();
    else
        require_once('../../connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../../admin/category-list.php');

	exit();
	
}

if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'Invalid ID!';

	header('location: ../../admin/category-list.php');

	exit();
} 
$id = $_REQUEST['id'];


	$sql = "DELETE FROM categories WHERE id =".$id;
    if ($result=mysqli_query($conn,$sql))
	{
	// Return the number of rows in result set
	$rowaff=mysqli_affected_rows($conn);

	}
    if ($rowaff==0) {

		header("Location:../../admin/category-list.php?msg=error");

    } else {

    
		header("Location:../../admin/category-list.php?msg=delete");


    }
?>
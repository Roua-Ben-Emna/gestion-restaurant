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

if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'Invalid ID!';

	header('location: ../../admin/food-list.php');

	exit();
} 

$id = $_REQUEST['id'];


$sql = "DELETE FROM food WHERE id =" .$id;
$result=mysqli_query($conn,$sql);
if ($result=mysqli_query($conn,$sql))
{
// Return the number of rows in result set
$rowaff=mysqli_affected_rows($conn);

}

if ($rowaff==0) {

	$_SESSION['msg'] = 'repatDeleted!';
	header("Location:../../admin/food-list.php?msg=delete");

	
} else {

	
	header("Location:../../admin/food-list.php?msg=error");


}

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

if (!isset($_POST['name']) || !isset($_POST['short_desc']) || !isset($_POST['long_desc'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../../admin/category-list.php');

	exit();
}



$name = $_POST['name'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];

$sql = "INSERT INTO categories(name,short_desc,long_desc) VALUES('$name','$short_desc','$long_desc')";
mysqli_query($conn,"SET NAMES'utf8'");
if ($result=mysqli_query($conn,$sql))
{
// Return the number of rows in result set
$rowaff=mysqli_affected_rows($conn);

}
if ($rowaff==0) {

$_SESSION['msg'] = 'erreur!';
	header("Location:../../admin/category-list.php?msg=error");
	
} else {

	
	$_SESSION['msg'] = 'categorie Ajoutee!';
	header("Location:../../admin/category-list.php?msg=succes");


}

?>


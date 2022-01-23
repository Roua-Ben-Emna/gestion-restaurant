<?php
    if (!file_exists('../../connection-pdo.php' ))
    throw new Exception();
else
    require_once('../../connection-pdo.php' ); 
    
if (!isset($_POST['name']) || !isset($_POST['short_desc']) || !isset($_POST['long_desc'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../../admin/category-list.php');

	exit();
}

if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'Invalid ID!';
 

	exit();
} 
echo'hemmo';
$id = $_REQUEST['id'];


$name = $_POST['name'];
$short_desc = $_POST['short_desc'];
$long_desc = $_POST['long_desc'];

$sql = "UPDATE categories set  name='".$name."',  short_desc='".$short_desc."',long_desc='".$long_desc."'WHERE id =" .$id;
mysqli_query($conn,"SET NAMES'utf8'");

if ($conn->query($sql) === TRUE) {
$_SESSION['msg'] = 'categorie Ajoutee!';
        header("Location:../../admin/category-list.php?msg=succesmod");

        
    } else {
    
            $_SESSION['msg'] = 'erreur!';
        header("Location:../../admin/category-list.php?msg=error");
        
    
    
    }

?>
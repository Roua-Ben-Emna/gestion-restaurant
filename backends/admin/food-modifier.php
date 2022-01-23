<?php
    if (!file_exists('../../connection-pdo.php' ))
    throw new Exception();
else
    require_once('../../connection-pdo.php' ); 
    
    if (!isset($_POST['name']) || !isset($_POST['desc'])|| !isset($_POST['category']) || !isset($_POST['prix'])) {

        $_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';
    
        header('location: ../../admin/food-list.php');
    
        exit();
    }
if (!isset($_REQUEST['id'])) {

	$_SESSION['msg'] = 'Invalid ID!';
 

	exit();
} 
echo'hemmo';
$id = $_REQUEST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$prix = $_POST['prix'];

$sql = "UPDATE food set  fname='".$name."', description='".$desc."',cat_id='".$category."',prix='".$prix."' WHERE id =" .$id;
mysqli_query($conn,"SET NAMES'utf8'");

if ($conn->query($sql) === TRUE) {
$_SESSION['msg'] = 'categorie Ajoutee!';
        header("Location:../../admin/food-list.php?msg=succesmod");

        
    } else {
    
            $_SESSION['msg'] = 'erreur!';
        header("Location:../../admin/food-list.php?msg=error");
        
    
    
    }

?>
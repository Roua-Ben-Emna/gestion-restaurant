<?php
session_start();

//delete reservation

if(isset($_POST['d'])) {
 
require('connection-pdo.php');
 
 $id = $_POST['id'];
    

 $sql = "UPDATE orders set  status='annulée' WHERE id =" .$id;
 mysqli_query($conn,"SET NAMES'utf8'");
 if (mysqli_query($conn, $sql)) {
    header("Location:viewres.php?delete=success");
} else {
    header("Location:viewres.php?delete=error");
}
}



?>

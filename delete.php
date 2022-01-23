<?php
session_start();

//delete reservation

if(isset($_POST['delete-submit'])) {
 
require('connection-pdo.php');
 
 $reservation_id = $_POST['reserv_id'];
 $sql = "UPDATE reservation set  status='annulée' WHERE id ='".$reservation_id."'";
 mysqli_query($conn,"SET NAMES'utf8'");
 if (mysqli_query($conn, $sql)) {
    header("Location:viewres.php?delete=success");
} else {
    header("Location:viewres.php?delete=error");
}
}



?>


    



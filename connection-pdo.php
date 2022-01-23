<?php
$host = "localhost";
$user= "root";
$pwd = "";
$database = "BdResto";


    $conn = mysqli_connect($host, $user, $pwd, $database);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>



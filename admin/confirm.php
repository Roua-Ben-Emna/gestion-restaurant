<?php

require('../connection-pdo.php');

$sql="UPDATE orders SET `status`='validé' WHERE order_id='".$_GET['ido']."'";
echo $sql;
mysqli_query($conn,"SET NAMES'utf8'");
mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn)>0){header('location:order-list.php');}
	




?>
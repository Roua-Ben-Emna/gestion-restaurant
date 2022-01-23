<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

    
<style>
body {font-family: Arial, Helvetica, sans-serif;}
h1{text-align:center;
    padding: 40px;
}
.reser{
	
	
	background: #484848;
	margin-left: 16.7%;
  margin-top:-22px;
  width:83.8%;
padding-top:6px;

 
}
.tableRes
{
  margin-left: 10%; 
  padding: 10px;
 margin:auto;
  width:50%;
  color:lightgray;
}



</style>



	
</head>


<div class="reser" >

  <div class="section">
    <h1>Tables Reservées</h1>
  </div>
<?php

require("../connection-pdo.php");
    
      
  
    $sql = "SELECT * FROM reservation ";
    mysqli_query($conn,"SET NAMES'utf8'");
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="tableRes" cellspacing="12" cellpadding="5">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Nombre de personnes</th>
                        <th scope="col">date de reservation</th>
                        <th scope="col">Temps</th>
                        <th>statut</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                      
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='delete.php' method='POST'>
                    <input name='reserv_id' type='hidden' value=".$row["id"].">
                      <th scope='row'>".$row["name"]."</th>
                      <td><center>".$row["nb"]."</center></td>
                      <td><center>".$row["datear"]."</center></td>
                      <td><center>".$row["timear"]."</center></td>";
                      if($row["status"]=='confirmée'){echo"<td style='color:green;'><center>".$row["status"]."</center></td>";}
                      else{echo"<td style='color:darkred;'><center>".$row["status"]."</center></td>";}
                      
                    echo"  <td><center>".$row["phone"]."</center></td>
                      <td><center>".$row["email"]."</center></td>
                                                </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
    }
    else {    echo "<p class='text-white text-center bg-danger'>La liste de reservation est vide!<p>"; }
    
    
mysqli_close($conn);
?>
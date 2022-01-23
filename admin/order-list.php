<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>




<?php

require('../connection-pdo.php');

$sql = 'SELECT orders.order_id, orders.user_name, orders.timestamp, food.fname,orders.nb,orders.address,prix ,status FROM orders LEFT JOIN food ON orders.food_id = food.id';
mysqli_query($conn,"SET NAMES'utf8'");
$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);



?>
					<head>	
          <style>

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}



h1{text-align:center;
  padding: 40px;
}
.order{
	
	background: #484848;
	margin-left: 16.7%;
  margin-top:-22px;
  width:83.8%;
padding-top:6px;

 
}
.tableOrd
{
  margin-left: 10%; 
  padding: 10px;
 margin:auto;
  width:50%;
  color:lightgray;
}
.supp{ text-decoration: none;
	color:lightgray;
  border-radius: 4px;
  padding: 12px 28px;
  background:rgba(255, 70, 0, 1);
  font-weight:bold;
}
  .sup{ text-decoration: none;
	color:lightgray;
  border-radius: 4px;
  padding: 12px 28px;
  background:rgb(161, 155, 148);}

</style>
</head>

<div class="order">

	<div class="section">
		<h1>Commandes</h1>
	</div>

  <?php

    if (isset($_SESSION['msg'])) {
        echo '<div class="section center" style="margin: 5px 35px;"><div class="row" style="background: red; color: white;">
        <div class="col s12">
            <h6>'.$_SESSION['msg'].'</h6>
            </div>
        </div></div>';
        unset($_SESSION['msg']);
    }

    ?>
	
	<div class="section center" style="padding: 20px;">
		<table class="tableOrd" cellspacing="19" cellpadding="10">
        <thead>
          <tr>
              <th>Numéro de commande</th>
              <th>Nom d'utilisateur</th>
              <th>Nom de repas</th>
              <th>date</th>
              <th>nombre de plat</th>
              <th>prix total</th> 
              <th>adresse</th>
              <th>statut</th>
              <th>validation</th>

              
          </tr>
        </thead>

        <tbody>
        <?php

            while($row = mysqli_fetch_array($result)) {

          ?>
          <tr>
            <th><center><?php $data=$row['order_id']; echo $data; ?></center></th>
            <td><center><?php echo $row['user_name']; ?></center></td>
            <td><center><?php echo $row['fname']; ?></center></td>
            <td><center><?php echo $row['timestamp']; ?></center></td>
            <td><center><?php echo $row['nb']; ?></center></td>
            <td><center><?php echo $row['nb']*$row['prix'].' DT' ; ?></center></td>
            <td><?php echo $row['address']; ?></td>           
            <?php  if($row["status"]=='validé'){ ?><td  style='color:green;'><center><?php echo $row["status"]; ?></center></td><?php ;}?>          
            <?php  if($row["status"]=='en cours'){ ?> <td  style='color:yellow;'><center><?php echo $row["status"]; ?></center></td> <?php ;}?>  
            <?php  if($row["status"]=='annulée'){ ?>  <td style='color:darkred;'><center><?php echo $row["status"]; ?></center></td> <?php ;}?>  
            <td><?php if ($row['status']!="en cours") {?>
               <button disabled class='sup'>confirmé</button>
              <?php } elseif ($row['status']=="en cours") {?>
          <button onclick="window.location.href='confirm.php?ido=<?php print $data ;?>'" class='supp'>Confirmer</button></td>   <?php } ?>
      
          </tr><?php } ?>

          
         
        </tbody>
      </table>
	</div>
</div>

<script>
var modal = document.getElementsById("myModal");
var btn = document.getElementsById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

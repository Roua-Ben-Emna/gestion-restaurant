
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>




<?php

require('../connection-pdo.php');

$sql = 'SELECT food.id, food.fname, food.description, categories.name ,food.prix
        FROM food
        LEFT JOIN categories
        ON food.cat_id = categories.id';
mysqli_query($conn,"SET NAMES'utf8'");
$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);




?>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
h1{text-align:center;
  padding: 50px;
}
.food{
	
	background:#484848;
	margin-left: 16.7%;
  margin-top:-22px;
  width:83.8%;


 
}
.tableFood
{
  margin-left: 16.7%; 
  padding: 30px;
 margin:auto;
  width:50%;
  color:lightgray;
}

.addN{ text-decoration: none;
	color:lightgray;
  border-radius: 4px;
  padding: 12px 28px;
  background:black;
  box-shadow: 0 6px 20px 0 rgba(255, 70, 0, 1);}
.supp{ text-decoration: none;
	color:lightgray;
  border-radius: 4px;
  padding: 12px 28px;
  background:rgba(255, 70, 0, 1);}
  
</style>
</head>	

<div class="food" >

	<div class="section">
		<h1>Nos Plats</h1>
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
<body>
	<div class="section right" style="padding: 15px 25px;">
		<a href="food-add.php" class="addN">Ajouter Plat</a>
	</div>
	<?php

if(isset($_GET['msg'])){
	  if($_GET['msg'] == "succes") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
		  echo '<center><h3 class="bg-danger text-center" style="color:green;">repas Ajouté!</h3></center>';
	  }
	  if($_GET['msg'] == "error"){ 
		  echo '<center><h3 class="bg-success text-center" style="color:darkred;">erreur! </h3></center>';
	  }
    if($_GET['msg'] == "delete"){ 
		  echo '<center><h3 class="bg-success text-center" style="color:green;">repas supprimé! </h3></center>';
	  }
    if($_GET['msg'] == "succesmod"){ 
		  echo '<center><h3 class="bg-success text-center" style="color:green;">repas modifié! </h3></center>';
	  }
  }  

?>
	<div class="section center" style="padding: 20px;">
		<table class="tableFood" cellspacing="19" cellpadding="10" >
        <thead>
          <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>catégorie</th>
              <th>prix</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
        <?php 
		
		    while($row = mysqli_fetch_array($result)) {
			
			   ?>
          <tr>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['prix'].'DT'; ?></td>
            <td><a href="../backends/admin/food-delete.php?id=<?php echo $row['id']; ?>"style="text-decoration:none"><span class="supp" data-badge-caption="">Effacer</span></a>
          </td>
          <td> <a href="food-modifier.php?id=<?php echo $row['id']; ?>&fname=<?php echo $row['fname']; ?>&description=<?php echo $row['description']; ?>&name=<?php echo $row['name']; ?>&prix=<?php echo $row['prix']; ?>"style="text-decoration:none"><span class="supp" data-badge-caption="">Modifier</span></a></td>
          </tr>

          <?php } ?>
         
        </tbody>
      </table>
	</div>
</div>

</body>
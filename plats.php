<?php

session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Plats</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- <meta http-equiv="refresh" content="1"> -->

    <link rel="stylesheet" href="tab.css">
  <link rel="stylesheet" href="stylenav.css">
  <link rel="stylesheet" href="stylefooter.css">


</head>
<body>
  
<section id="b">

<?php require('nav.php'); ?>
</section>


<?php

require('connection-pdo.php');


if (isset($_REQUEST['id'])) {

  $sql = 'SELECT * FROM food WHERE cat_id = "'.$_REQUEST['id'].'"';
  mysqli_query($conn,"SET NAMES'utf8'");
$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);


if ($result)
{
  // it return number of rows in the table.
  $rowcount = mysqli_num_rows($result);
}


?>


<section class="fplats">

  <div class="container">
  <div class="titre"> 
  <<h3><center>Commander Maintenant ! <center></h3>
<h1><center>Nos Plats !<center></h1>
</div>  


  
    <?php if ($rowcount  == 0) {
  echo '<div class="section gray center" style="border: 1px solid black; border-radius: 5px;">
      <p class="header"><center>Désolé, aucune catégorie à afficher!</center></p>
  
    '
  
    ;
} else {  ?>


    
    <div class="rowcard">
    
    <?php 
    $j=0;
    while($row = mysqli_fetch_array($result)) {
      $j=$j+1;
      ?>

     
<div class="col">
	  <form method="POST" action="order-plats.php?id=<?php echo $row['id'] ; ?>">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" style="width :100%" src="images/imagesplat/b<?php echo $_REQUEST['id'].$j; ?>.jpg">
            </div>
          
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><a class="nom" href=""><?php echo  $row['fname'].' '.$row['prix'].'DT' ; ?></a></span>
              <div class="card-content">
                <p><center> Vos plats préférés frais, sain et de saison, livrés en quantité adaptée à votre besoin, partout en Tunisie. ... Commander dès maintenant!</center> </p>
              </div>
		
			  <div class="card-content">
				  <label>nombre de plat</label>
			 <br> <input type="number" name="nb" min="1"value="1"style="width:50px"></br>
			  <label>adresse</label>
			  <br><input type="text" name="adr" style="width:100px" required></br>
			  <br>
              </div>
			  
              <div class="card-content center">
                <input type="submit" id="commande"class="btn-effect"  value="Commandez">
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"></span>
              <p><?php echo  $row['description'] ; ?></p>
            </div>
      
          </div>
	</form>
      </div>
      
    <?php } ?>

    


    </div>
  
    <?php
        
      } 
    ?>



  </div>
  
</section>
<?php require('footer.php'); ?> 
    </body>

    <?php 
} else {

  $sql = 'SELECT * FROM food';
  mysqli_query($conn,"SET NAMES'utf8'");
  $result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);


if ($result)
{
  // it return number of rows in the table.
  $rowcount = mysqli_num_rows($result);
}


?>


<section class="fplats">

  <div class="container">
  <div class="titre"> 
  <<h3><center>Commander Maintenant ! <center></h3>
<h1><center>Nos Plats !<center></h1>
</div>  


  
    <?php if ($rowcount  == 0) {
  echo '<div class="section gray center" style="border: 1px solid black; border-radius: 5px;">
      <p class="header"><center>Désolé, aucune catégorie à afficher!</center></p>
  
    '
  
    ;
} else {  ?>


    
    <div class="rowcard">
    
    <?php 
    $j=0;
    while($row = mysqli_fetch_array($result)) {
      $j=$j+1;
      ?>

      <div class="col">
	  <form method="POST" action="order-plats.php?id=<?php echo $row['id'] ; ?>">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" style="width :100%" src="images/imagesplat2/bbb<?php echo $j; ?>.jpg">
            </div>
          
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><a class="nom" href=""><?php echo  $row['fname'].' '.$row['prix'].'DT' ; ?></a></span>
              <div class="card-content">
                <p><center> Vos plats préférés frais, sain et de saison, livrés en quantité adaptée à votre besoin, partout en Tunisie. ... Commander dès maintenant!</center> </p>
              </div>
		
			  <div class="card-content">
				  <label>nombre de plat</label>
			 <br> <input type="number" name="nb" min="1"value="1"style="width:50px"></br>
			  <label>adresse</label>
			  <br><input type="text" name="adr" style="width:100px"required></br>
			  <br>
              </div>
			  
              <div class="card-content center">
                <input type="submit" id="commande"class="btn-effect"  value="Commandez">
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"></span>
              <p><?php echo  $row['description'] ; ?></p>
            </div>
      
          </div>
	</form>
      </div>
      
    <?php } ?>

    


    </div>
  
    <?php
        
      } 
    ?>



  </div>
  
</section>
<?php require('footer.php'); ?> 
    </body>
    <?php 
} ?>  
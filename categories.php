<?php

session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ThreeAmigos - Categories!</title>

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

$sql = 'SELECT * FROM categories';
mysqli_query($conn,"SET NAMES'utf8'");

$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);


if ($result)
{
	// it return number of rows in the table.
	$rowcount = mysqli_num_rows($result);
}
?>


<section class="fcategories">

	<div class="container">


<?php if ($rowcount == 0) {
	echo '<div class="section gray center" style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:pink;">
			<p class="header">Désolé, aucune catégorie à afficher!</p>
		</div>';
} else {  ?>




<div class="titre">	
	<<h3><center>Commander Maintenant ! <center></h3>
<h1><center>Categories!<center></h1>
</div>	


		<div class="rowcard"> 
		<?php 
		$j=0;
		while($row = mysqli_fetch_array($result)) {
			$j=$j+1;
			?>

<a href="plats.php?id=<?php echo $row['id']; ?>">  <div class="col" id="cat">
        
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">
				      <img   style="width :100%"src="images/imagescat/b<?php echo $j; ?>.jpg">
				    </div>
            
            
				    <div class="card-content">
				      <span class="card"><a class="nom" href="plats.php?id=<?php echo $row['id']; ?>"><?php echo  $row['name'] ;?></a></span>

				    </div>
            
            
				    <div class="card-reveal">
			
				      <p><?php echo  $row['long_desc']; ?></p>
				    </div>
         
				  </div>
			</div></a>

		
<?php } ?>

		


</div>

<?php
		
	} 
?>
	</div>
</section>
<?php require('footer.php'); ?>	
 </body>


</html>
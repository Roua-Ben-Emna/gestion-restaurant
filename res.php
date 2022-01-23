<!DOCTYPE html>
<?php include('res_check.php')?>

<html>
	<head>





		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Reservation</title>

		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">
		
	
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="stylenav.css">
		<link rel="stylesheet" href="stylefooter.css">



    </head>
	<body>
    <?php require('nav.php'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</section>
<!-- Reservation -->
		<div id="res" class="section">

			<!-- Backgound Image -->
			<div class="bg-image" style="background-image:url(../img/background03.jpg)"></div>
			<!-- /Backgound Image -->
			<?php



?>
			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- reservation form -->
                    <table >

                            <tr>
                                <th>
				
                        
						<form class="reserve-form" method="post" action="res_check.php" style="width :100%" >
							<div class="section-header text-center">
							<?php	if(isset($_GET['msg'])){
	  if($_GET['msg'] == "error") {   //douleuei bazw ta errors apo ta headers.. prp na bgalw to requiered
		  echo '<center><h5 class="bg-danger text-center" style="color:red;">Désolé,Nous somme fermés <br>prière de consulter nos horaires d ouverture </h5></center>';
	  }

  }  

?>
								<h4 class="sub-title">Reservation</h4>
								<h2 class="title white-text">Réservez votre table</h2>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Nom et prenom:</label>
									<input class="input" type="text" placeholder="Name" name="name" required>
								</div>
								<div class="form-group">
									<label for="phone">telephone:</label>
									<input class="input" type="tel" placeholder="Phone" name="phone" required>
								</div>
								<div class="form-group">
									<label for="date">Date:</label>
									<input class="input" type="date" placeholder="MM/DD/YYYY" name="date" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input class="input" type="email" placeholder="Email" name="email" required>
								</div>
								<div class="form-group">
									<label for="number">Nombre d'invités:</label>
									<select class="input" name="nb" required>
										<option value="1">1 Person</option>
										<option value="2">2 People</option>
										<option value="3">3 People</option>
										<option value="4">4 People</option>
										<option value="5">5 People</option>
										<option value="6">6 People</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Heure:</label>
								  <input class="input" type="time" placeholder="HH:MM" name="time" required>
								</div>
						

							<div class="col-md-12 text-center">
								<input type="submit" class="main-button" value="réservez maintenant" name="reserv">
					

							</div>

						</form>
					</div>
</th>
					<!-- /reservation form -->

					<!-- opening time -->
                    <th>
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time "  style="width :100%">
							<div class="section-header text-center">
								<h2 class="title white-text">Horaire d'ouverture</h2>
							</div>
							<ul>
								<li>
									<h4 class="day">Dimanche</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Lundi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Mardi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Mercredi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Jeudi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Vendredi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Samedi</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
							</ul>
						</div>
					</div>
					<!-- /opening time -->

				</div>
</th>
<tr>
</table>

				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Reservation -->
		<link rel="stylesheet" href="stylefooter.css">
<?php require('footer.php'); ?>
	</body>
	</html>
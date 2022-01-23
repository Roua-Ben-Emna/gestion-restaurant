<link rel="stylesheet" href="stylenav.css">
<link rel="stylesheet" href="stylefooter.css">
<?php
  session_start();

  require('connection-pdo.php');

    			if (isset($_POST['reserv'])){
    					$name=$_POST['name'];
						$phone=$_POST['phone'];
						$date=$_POST['date'];
						$email=$_POST['email'];
						$guests=$_POST['nb'];
						$time=$_POST['time'];
						$iduser=$_SESSION['user_id'];
					
						    
						 	if($guests==1 || $guests==2)
						 	{
        					$tables=1;
    						}
			    			else{
			    				$tables=ceil(($guests-2)/2);
			    				}

			  				 $sql = "SELECT SUM(num_tables) FROM reservation WHERE datear='$date'";
							    $result = $conn->query($sql);
							    if ($result->num_rows > 0) {
							    while($row = $result->fetch_assoc()) {
							        $current_tables=$row["SUM(num_tables)"];
							    }
							    $a_tables=12-($current_tables + $tables);
							    }
							    else
							    	{$a_tables=12;}
							    if($current_tables + $tables > $a_tables){
					              echo "nombre de places insufisants";
							    }
							    

			  				else
			  				{

								if($time>=8.00 and $time<=23.00){
			  					  $query = "INSERT INTO reservation (name, phone,datear,email,nb,num_tables,timear,id_user,status) 
			          				VALUES('$name','$phone','$date','$email','$guests','$tables','$time','$iduser','confirmée')";
									   mysqli_query($conn,"SET NAMES'utf8'");
					             
								  if( mysqli_query($conn, $query)){?>
									<section id="b">

									<?php require('nav.php'); ?>  
									
									</section>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br> <div  style="margin: 10px; padding: 3px 10px; margin-top: 35px; border: 2px solid black; border-radius: 5px; color: black; background:orange;">
										<p><b><center>votre réservation est validée,  Nous vous souhaitons la bienvenue dans notre restaurant </center></b></p></div>
					  <?php }   
					  }
					  else {
						header("Location:res.php?msg=error");
					  
					
					}

					               
					          }
					      }
							           
       							

		


		?>


	

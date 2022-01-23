
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php
if (isset($_SESSION['msg'])) {
	echo '<div class="section white-text" style="background: #B35458;">'.$_SESSION['msg'].'</div>';
	unset($_SESSION['msg']);
}
?>
<head>
	<style>
.dash-btn	.sec {
	
	margin-left:40%;
		width:400px;
	    text-align:center;
		margin:15px;
		padding: 40px;
		border: 2px solid white; 
		border-radius: 20px; 
		font-size: 20px; 
		background: lightgray;

		
	}
	a{ text-decoration: none;
	color:black}
	.col-s12{
  margin-left: 16.7%;
  padding: 10px;
 margin:auto;
  width:50%;
}

h1{text-align:center;
color:	#FF4500;
}
#wi{
	
	background:#484848; 
	margin-left: 16.7%;
margin-top:-22px;
  width:83.8%;
padding-top:6px;

 
}
.sec:hover{background:rgba(247, 111, 20, 0.993);

}
		
		</style>
</head>	
<div class="section white-text center" id="wi">

	<h1></h1>

	<div class="row" style="padding: 50px;">
		<div class="col-s12">

			<a class="dash-btn" href="food-list.php"><div class="sec" >Repas</div></a>
			<a class="dash-btn" href="category-list.php"><div class="sec" >Catégories</div></a>
			<a class="dash-btn" href="order-list.php"><div class="sec" >Commandes</div></a>
			<a class="dash-btn" href="reserTables-list.php"><div class="sec">Tables Reservées</div></a>
			
		
		</div>

	</div>

</div>



<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>




<?php

require('../connection-pdo.php');

$sql = 'SELECT * from contact';
mysqli_query($conn,"SET NAMES'utf8'");
$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);




?>
<head>
<style>

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
		<h1>Les Messages</h1>
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


	<div class="section center" style="padding: 20px;">
		<table class="tableFood" cellspacing="19" cellpadding="10" >
        <thead>
          <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Message</th>
              
          </tr>
        </thead>

        <tbody>
        <?php 
		
		    while($row = mysqli_fetch_array($result)) {
			
			   ?>
          <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['msg']; ?></td>

          </tr>

          <?php } ?>
         
        </tbody>
      </table>
	</div>
</div>

</body>
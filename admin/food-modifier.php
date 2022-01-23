
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>




<?php

require('../connection-pdo.php');

$sql = 'SELECT id,name FROM categories';
mysqli_query($conn,"SET NAMES'utf8'");
$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);



?>
<head>	
<style>
.waves-effect{
padding:1% ;
background:orange;
color:white;
border-radius:20%   
}
.waves-effect:hover{

background:grey;
 
}
h3{text-align:center;
}
.addF{
	
	background: #484848;
	margin-left: 16.7%;
    margin-top:-22px;
  width:83.8%;
padding-top:6px;

 
}
.dismiss{padding: 15px 10px;
color:white;
text-decoration:none;
}

select{
    
    color: white; 
    margin-left: 16.7%; 
    width:75%;
    padding: 10px;
    margin: 8px 0;
  
}

.rowF input[type=text]{
    
    color: white; 
    margin-left: 16.7%; 
    width:72%;
    padding: 10px;
    margin: 8px 0;
  
}
form{  border: 1px solid #ccc;
    box-sizing: border-box;
    padding:10px;}
    
</style>
</head>

<div class="addF" style=margin-left:16.7%;">

	<div class="section">
		<h3>Modifier repas</h3>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="../backends/admin/food-modifier.php?id=<?php echo $_REQUEST['id']; ?>" method="post">

            <?php

            if (isset($_SESSION['msg'])) {
                echo '<div class="row" style="background: red; color: white;">
                <div class="col s12">
                    <h6>'.$_SESSION['msg'].'</h6>
                    </div>
                </div>';
                unset($_SESSION['msg']);
            }

            ?>

            <div class="rowF">
                <div class="col s6" style="">
                            <div class="input-field">
                            <label style="color: white;"><b>Nom de repas :</b></label>
                            <input id="name" name="name" type="text" class="validate" style="color: black;" value="<?php echo  $_REQUEST['fname']?>">
                           
                            </div>
                </div>
                <div class="col s6" style="">
                            <div class="input-field" style="color: white !important;">
                            <label style="color: white;"><b>catégories :</b></label>
						    <select name='category'style="color: black;" >
						      <?php 

						      		while($row = mysqli_fetch_array($result)) {
						      			echo '<option value="'.$row['id'].'"';
                                        if($row['name']==$_REQUEST['name']){echo 'selected="selected"';}
                                        echo '>'.$row['name'].'</option>';
						      		}
						      ?>
						    </select>
						    <div class="input-field">
                <label for="desc" style="color: white;"><b>prix :</b></label>
                <input id="p" name="prix" type="float" class="validate" style="color: black; " value="<?php echo $_REQUEST['prix'];?>">
                
                </div>
						  </div>
                </div>
            </div>

            <div class="rowF">
                <div class="col s12">

                <div class="input-field">
                <label for="desc" style="color: white;"><b>Description :</b></label>
                <input id="desc" name="desc" type="text" class="validate" style="color: black; " value="<?php echo  $_REQUEST['description'];?>" >
                
                </div>
                
                </div>
            
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="dismiss" style="padding: 15px 10px;">
                        <a href="food-list.php" class="waves"style="text-decoration:none;color:darkorange">Rejeter</a>
                    </div>
                    <div class="dismiss" style="padding: 15px 10px;">
                        <button type="submit" class="waves-effect">Modifier</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>


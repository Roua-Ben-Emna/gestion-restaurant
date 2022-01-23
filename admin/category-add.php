
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>



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
.addcat{
	
	background: #484848;
	margin-left: 16.7%;

  width:83.8%;
padding-top:6px;

margin-top:-22px;
}
.dismiss{
color:black;
text-decoration:none;


}

.row1 input[type=text]{
    
    color: white; 
    margin-left: 16.7%; 
    width:75%;
    padding: 15px;
    margin: 8px 0;
  
}
form{  border: 1px solid #ccc;
    box-sizing: border-box;
    padding:10px;}
</style>
</head>
<div class="addcat">

	<div class="section">
		<h3>Ajouter Catégories</h3>
	</div>


    <div class="section center" style="padding: 40px;">

        <form action="../backends/admin/cat-add.php" method="post">

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

            <div class="row1">
                <div class="col s6" style="">
                            <div class="input-field">
                            <label for="name" style="color: white;"><b>Nom de catégorie :</b></label>
                            <input id="name" name="name" type="text" class="validate"style="color:black;" >
                           
                            </div>
                </div>
                <div class="col s6" style="">
                            <div class="input-field">
                            <label for="short_desc" style="color: white;"><b>Courte Description :</b></label>
                            <input id="short_desc" name="short_desc" type="text" class="validate" style="color:black;">
                            
                            </div>
                </div>
                <div class="col s12">

                <div class="input-field">
                <label for="long_desc" style="color: white;"><b>Longue Description :</b></label>
                <input id="long_desc" name="long_desc" type="text" class="validate"style="color:black;">

                </div>
            </div>

            </div>

            <div class="row2">
                <div class="col s12">
                    <div class="dismiss" >
                        <a href="category-list.php" class="waves" style="text-decoration:none;color:darkorange">Rejeter</a>
                    </div>
                    <div class="section right" style="padding: 15px 10px;">
                        <button type="dismiss" class="waves-effect" >Ajouter</button>
                    </div>
                </div>
            </div>

        </form>


    </div>

</div>



<?php

echo '<h3> les reservations</h3>';
require('connection-pdo.php');
    
        $user = $_SESSION['user_id'];

  
    $sql = "SELECT * FROM reservation WHERE id_user = $user and status='confirmée'";
    mysqli_query($conn,"SET NAMES'utf8'");
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="" style="margin: 10px; padding: 3px 10px; border: 2px solid black; border-radius: 5px; color: black;">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Reservation Date</th>
                        <th scope="col">Time Zone</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Annuler</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='delete.php' method='POST'>
                    <input name='reserv_id' type='hidden' value=".$row["id"].">
                      <th scope='row'>".$row["name"]."</th>
                      <td>".$row["nb"]."</td>
                      <td>".$row["datear"]."</td>
                      <td>".$row["timear"]."</td>
                      <td>".$row["phone"]."</td>
                      <td>".$row["email"]."</td>
                      
                      <td class='table-danger'><button type='submit' name='delete-submit' class=''style='  border-radius: 50%; padding: 15px;background-color:  red'></button>
                      </td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
        
    }
    else {     echo"  <img src='box.gif' style='height:400px ; width:500px'  >"; echo "<p class='text-white text-center bg-danger'>Votre liste de réservation est vide!<p>"; }
    
    echo '<h3> les commandes</h3>';
    $sql = "SELECT orders.*,food.fname,food.prix FROM orders , food  where  orders.user_id = $user and food.id=orders.food_id and status='en cours'" ;
    mysqli_query($conn,"SET NAMES'utf8'");
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        
        echo
        '
            <table class="" style="margin: 10px; padding: 3px 10px; border: 2px solid black; border-radius: 5px; color: black;">
                <thead>
                    <tr>
                        <th scope="col">order_id</th>
                        <th scope="col">nom de plat</th>
                        <th scope="col">date de la commande</th>
                        <th scope="col">nombre de plat</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Total</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Annuler</th>
                        <th class="table-danger" scope="col"></th>
                    </tr>
                </thead> ';
        while($row = $result->fetch_assoc()) {
        echo"
                <tbody>
                    <tr>
                    <form action='deleteorder.php' method='POST'>
                    <input name='id' type='hidden' value=".$row["id"].">
                      <th scope='row'>".$row["order_id"]."</th>
                      <td>".$row["fname"]."</td>
                      <td>".$row["timestamp"]."</td>
                      <td>". $row['nb']."</td>
                      <td>". $row['prix']." DT</td>
                      <td>". $row['prix']*$row['nb']." DT</td>
                      <td>".$row['address']."</td>
                     
                      
                      <td class='table-danger'><button type='submit' name='d' class='' style='  border-radius: 50%; padding: 15px;background-color:  red'></button></td>
                          </form>
                    </tr>
              </tbody>";
            
        }   
        echo "</table>";
    
    
        
    }
 
    else {    echo"  <img src='box.gif' style='height:400px ; width:500px'  >";
        echo "<p class='text-white text-center bg-danger'>Votre liste des commandes est vide!<p>"; }
    

    
mysqli_close($conn);
?>

<?php require('footer.php'); ?>
</body>
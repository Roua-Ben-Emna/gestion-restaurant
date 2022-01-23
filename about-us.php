
<style>
#more {display: none;}

</style>


<table >
    <tr>
        <th>

    <h1 id="p"></h1>
<article>

    <p id="titre">
    Three Amigos ?<br>CLASSÉ PARMI LES 10 RESTAURANTS LES PLUS  recommandés à Tunis
UNE EXPÉRIENCE SENSORIELLE ET HUMAINE UNIQUE
 <span id="dots">...</span><span id="more"><br><br>C'est le restaurant parfait pour un voyage gastronomique qui vous permettra de vivre de nouvelles expériences culinaires dans un lieu discret et une ambiance chaleureuse.
Ici, on s’attable pour diner ou déjeuner mais aussi pour observer la préparation des plats et pénétrer dans le jardin secret des chefs.
Des tables ont été également installées à quelques pas des fourneaux pour ceux qui souhaitent dîner dans une ambiance intime</span>
<br> <br><br></p>
    <button onclick="myFunction()" id="myBtn">Lire la suite</button>

   
    

    
</article>
</th>
<th>
<img src="img/image01.jpg" class="logo2">
</th>
<tr>
</table>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Lire la suite"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "retour"; 
    moreText.style.display = "inline";
  }
}
</script>




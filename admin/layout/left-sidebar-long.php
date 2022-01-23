<head>
	<meta charset="UTF-8">

	<style>
  #left{background-color:#181818;}
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 16.7%;
  
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  padding: 8px 16px 5px 10px;
  text-decoration: none;
  height:40px;
  width:200px;
  margin:10px;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.title{color:white;
  padding:15px;}


</style>
</head>

<body id="left">
  <div class="nav1">
			
		<div class="title" id="left-sidebar">

				<h2 >Three Amigos</h2>
   </div>
				<ul >
				    <li ><a href="food-list.php">Plat </a></li>
				    <li ><a href="category-list.php">Catégories</a></li>
				    <li ><a href="order-list.php">Commandes</a></li>
					<li ><a href="reserTables-list.php">Tables Reservées</a></li>
        
			
				  </ul>
		
  </div>
</body>
<?php
require_once('header.php');
require_once('connect.php');

?>



<!DOCTYPE html>
<html>
<head>

	<title>menu-afex</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	
</div> 
</head>
<body>

	<div class="row">   
		<div class="col-lg-3"><img src="/images/newlogo.gif"></div>   
		<div class="col-lg-6">

			<p >   >DES HOMMES</p> 
			<p>     DES SOLUTIONS</p> 	
			<p>     DES SERVICES</p> 	

		</div>
		 
		 <div class="col-lg-3" >

		 		<p>Audatech Files Exchange 1.0</p>
				<p>Bienvenue Mr.<?php echo $_SESSION['nom'];  ?></p>
				<p>Agence de <?php echo $_SESSION['ville'] ?></p>	
		</div> 

	</div> 


	 <div class="row">  

		 <div class="col-lg-3"><p><em>10 derniers projets enregistrés</em></p>

		 <?php  include('lastprojet.php');   ?>


		 </div>   

		 <div class="col-lg-3">

		  <a href="newProjet.php"><img src="/images/doc.png"><p> NOUVEAU PROJET</p> </a><br>
		  <a href="listeProjet.php"><img src="/images/ok.png"><p> LISTE DE PROJET</p> </a>
		  
		 
		</div>

		<div class="col-lg-3">

		  
		  
		 
		</div>

		<div class="col-lg-3">
		<p><em><i> derniere note communiqué</i></em></p>
		  
		  
		 
		</div>

	</div>

</body>
</html>
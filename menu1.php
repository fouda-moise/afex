<?php
require_once('header.php');
require_once('connect.php');

?>



<!DOCTYPE html>
<html>
<head>

	<title>menu-afex</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>afex-connection</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	

</head>
<body id="applique1">
	

<div container>
	<div class="row">   
		<div class="col-lg-3"><button class="btn btn-default"><img src="assets/images/afex.png" alt="">AFEX</a></button></div>
		<div class="col-lg-6" id="demo" class="carousel slide" data-ride="carousel"></div>
		 
		 <div class="col-lg-3">
		 		<button class="btn btn-secondary">
		 			
					<p>BIENVENUE MR.<?php echo strtoupper($_SESSION['nom']);  ?></p>
					<p>AGENCE DE <?php echo $_SESSION['ville'] ?></p>	
		 		</button>
		 		
		</div> 

	</div> <br /><br /><br />


	 <div class="row">  

		 <div class="col-lg-3">

		 	
		 	


		 	<?php // include('lastprojet.php');   ?>
		 	<img src="assets/images/menu2.png">	
		 </div>   

		 <div class="col-lg-3">
		 <div class="navbar">
				<!--<div class="dropdown">-->

				<button class="btn btn-primary dropdown-toggles" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						PROJETS
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="newProjet.php" title="Lien 1">NOUVEAU</a></li>
				<li><a href="cible.php" title="Lien 2">RECHERCHE</a></li>
				<li><a href="listeProjet.php" title="Lien 3">TOUS LES PROJETS</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#" title="Lien 4"></a></li>
				</ul>
				<!--</div>-->          
		</div>
		 <!--  <a href="projet.php"><p>  </p> </a>-->
		 <!-- <a href="menudoc.php"><p>  DOCUMENTS</p> </a><br>-->
		 
		  
		 
		</div>

		<div class="col-lg-3">

		 <div class="navbar">
				<!--<div class="dropdown">-->

				<button class="btn btn-primary dropdown-toggles" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						DOCUMENTS
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="newDoc.php" title="Lien 1">NOUVEAU</a></li>
				<li><a href="#" title="Lien 2">RECHERCHE</a></li>
				
				<li role="separator" class="divider"></li>
				<li><a href="#" title="Lien 4"></a></li>
				</ul>
				<!--</div>-->
		</div>
		  
		 
		</div>

		<div class="col-lg-3">
		<div class="navbar">
				<!--<div class="dropdown">-->

				<button class="btn btn-primary dropdown-toggles" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						EXPLOITATION
				<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<li><a href="#" title="Lien 1">DEPENSE</a></li>
				<li><a href="#" title="Lien 2">NOTES DE FRAIS</a></li>
				<li><a href="#" title="Lien 3">SUIVI</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#" title="Lien 4"></a></li>
				</ul>
				<!--</div>-->
		</div>
		  
		  
		 
		</div>

	</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

	<div class="row">
		<div class="col-2"></div>
		<div class="col-2"></div>
		<div class="col-3"><button class="btn btn-dark"><i>powered by Aud@tech Copyright 2020</i></button></div>
		<div class="col-3"></div>
		<div class="col-2"></div>

	</div>
	
	
	</div>
	<script src="/js/jquery.js"></script> 
	<script src="/js/bootstrap.min.js"></script>	
</body>
</html>
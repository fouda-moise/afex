<?php

    //INCLUSION DES FONCTIONS
	
	require_once('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>afex-projet</title>
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="applique3">
	<div class="container">

	<div class="row">
		<div class="col-lg-3"></div><div class="col-lg-3"></div><div class="col-lg-3"></div><div class="col-lg-3"></div>
	</div>

	<div class="row">
		<div class="col-lg-3"></div><div class="col-lg-3"></div><div class="col-lg-3"></div><div class="col-lg-3"></div>
	</div>

	<div class="row">
	     <!-- RECHERCHE DU CLIENT -->
		<div class="col-lg-3" class="form-group">
			<a href="menu1.php">	<img src="assets/images/afex.png"></a>
			<form method="post" action="cible.php">

				<div class="form-group">
					<label for="client">Client : </label><br />
					<input type="text" name="client" class="form-control">
					<input class="btn btn-success"  type="submit" name="Entrer">

		
 				</div>

			</form>

		</div>

		 
		

		<!-- AFFICHAGE D'INFORMATION SUR LE CLIENT -->
		<div class="col-lg-9">
			<?php  //include("cible.php");  ?>
			<img src="">
		</div>




		
	</div>

	






	</div>
</body>
</html>
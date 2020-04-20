<?php
	
	require('header.php');
	require('connect.php');

    //echo $_SESSION['nom'];
    	 //$_SESSION['projet'] ;
	



    //INCLUSION DES FONCTIONS
	
	
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
<body id="applique2">
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
			<img src="assets/images/afex.png">
			<form method="post" action="cible.php">

				<div class="form-group">
					<label for="client">Client : </label>
					<input type="text" name="client" class="form-control">
					<input class="btn btn-success"  type="submit" name="Entrer">

		
 				</div>

			</form>
			<img src="assets/images/1.jpg">
			<img src="assets/images/2.jpg">
		</div>

		 
		<div class="col-lg-3"></div>

		<!-- AFFICHAGE D'INFORMATION SUR LE CLIENT -->
		<div class="col-lg-3">
			<?php  
						
							echo $var = $_POST['client'];
						
						

		$req1 = " SELECT * FROM projets ";

					$resultat = $base->query($req1);

					while ($ligne = $resultat->fetch()){
						if( $var == $ligne['client'])
					
					{ ?>
						
						<button class="btn btn-success"><?php 
						echo '<option>'.$ligne['numero']."<br/>";
						echo '<option>'.$ligne['intitule']."<br/>";
								?>
						</button><br />
						<a href="#" >details...</a>			 <hr>      
						<!-- DETAILS -->

				   <?php 		        
					}


					}


			 ?>

		</div>




		<div class="col-lg-3">

		</div>
	</div>

	






	</div>
</body>
</html>
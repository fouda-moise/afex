<?php
	
	require('header.php');
	require('connect.php');

    //echo $_SESSION['nom'];
    	 //$_SESSION['projet'] ;
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>new-document</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
	
</head>

<body>
<div class="container">
<div class="row">
<div class="col-3"></div>

<div class="col-6">
	
	<form method="POST" action="docnum.php" enctype="multipart/form-data">
	
	<!--    -->
	<div class="form-group">
	<label  for="type">type : </label>

	<select class="form-control" name="type">

    	<option value="FP-facture proformat">FP-facture proformat
    	<option value="BC-bon de commande">BC-bon de commande
    	<option value="BL-bon de livraison">BL-bon de livraison
    	<option value="FD-facture definitive">FD-facture definitive
	
	</select>
	</div>

	<!-- MOTEUR DE RECHERCHE DES INTITULES DES PROJET DANS LA BD   -->


	<div class="form-group">
	<label for="intitule">Projet : </label>
	
		<select class="form-control" name="intitule" size="1">

				<?php 

					$req1 = " SELECT intitule FROM projets ORDER BY dates DESC";

					$resultat = $base->query($req1);

					while ($ligne = $resultat->fetch())
					{
						echo '<option>'.$ligne['intitule']."<brfs/>";
					}

				 ?>
		</select>

		
 </div>
<?php   $_SESSION['projet'] = $ligne['intitule']; ?>

 <div class="form-group">
 	<label for="creation">Date de creation du document</label>
 	<input class="form-control" type="date" value="" name="">
 </div>

  <div class="form-group">
 	<label for="">Upload fichier</label>
 	<input class="form-control" type="file" name="myfile" />
 </div>

	<input type="submit" name="btn" value="Valider">
	</form>

</div>


<div class="col-3"></div>


</div>
</div>
</body>
</html>
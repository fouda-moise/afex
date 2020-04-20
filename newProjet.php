<?php require_once('header.php');  ?>



<!DOCTYPE html>
<html>
<head>
	<title>afex-projet</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>afex-connection</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
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

	<div class="col-lg-4">
			<img src="assets/images/afex.png">
			<img src="https://pngimage.net/wp-content/uploads/2018/06/image-dossier-png-1.png">
			<img src="https://mayotte.fff.fr/wp-content/uploads/sites/117/2018/12/dossiers.png">


	</div>  

	<div class="col-lg-6">



	<form action="valideProjet.php" method="post" name="creationformulaire">

	<fieldset>
		<legend><button class="btn btn-primary">ENREGISTREMENT D'UN NOUVEAU PROJET</button></legend>

		<div class="group-form">
      <label for="numero">Numero</label>
      <input class="form-control"  type="text" name="numero" value="<?php require_once('code_random.php');  ?>" >
		</div>

		<div class="group-form">
      <label for="intitule">Intitule</label>
      <input class="form-control" type="text" name="intitule" required>
		</div>

		<div class="form-group">

		<label for="description">Description</label>

		<textarea class="form-control" name="description" rows="3"></textarea>

		</div>


		<div class="form-group">
      <label for="client">Client</label>
      <input class="form-control" type="text" name="client"  required>
		</div>

	
		
		<div class="form-group">
      <label for="auteur">Responsable</label>
      <input class="form-control" type="text" name="auteur" value=" <?php  echo $_SESSION['nom'];   ?>" >
		</div>

		<div class="form-group">
      <label for="dates">Date creation </label>
      <input class="form-control" type="date" name="dates" value="date">
		</div>


		
		<div class="form-group">
     
   		<button class="btn btn-primary" type="submit">Valider</button> 
		</div>


	</fieldset>
</form>
</div>  

	

<div class="col-lg-2">
				<button class="btn btn-primary">
		 			
					<p>BIENVENUE MR.<?php echo strtoupper($_SESSION['nom']);  ?></p>
					<p>AGENCE DE <?php echo $_SESSION['ville'] ?></p>	
		 		</button>
</div>  

	
<div class="col-lg-offset-6 col-lg-3"></div>
	

<div class="row">   

	

</div> 









</div>
</div>
</body>
</html>
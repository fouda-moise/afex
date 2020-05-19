<?php 
require_once('header.php');
require_once('connect.php');


 	 $numpiece = $_POST['numpiece'];
	 $motif = $_POST['motif'];
	 $montant = $_POST['montant'];
	 $destinataire = $_POST['destinataire'];
	 $reference = $_POST['reference'];
	 $observation = $_POST['observation'];
	 $auteur = $_SESSION['nom'];


	
	  if ( !empty ($_POST['montant']) && !empty ($_POST['reference'])  ) {
	  $sql = $base->prepare('INSERT INTO depenses(numpiece,motif,montant,destinataire,reference,observation,auteur) VALUES( :numpiece, :motif, :montant, :destinataire, :reference, :observation, :auteur)');

	  $sql->execute(array(
			 	'numpiece' =>$numpiece, 
			 	'motif' =>$motif,
			 	'montant' =>$montant,
			 	'destinataire' => $destinataire,
			 	'reference' =>$reference,
			 	'observation' => $observation,
			 	'auteur' => $auteur ));

	// affichage de la piece enregistré et demande de modification et d'ajout sinon ressortir.
	  //echo $motif.'<br/>';
	   //echo $montant.'<br/>';
	    //echo $destinataire.'<br/>';
	     //echo $numpiece.'<br/>';
	     // echo $observation.'<br/>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>enregistrement-pieces</title>
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

	<div class="container">
		<div class="row" >
			<div class="col-lg-4">
				<img src="assets/images/afex.png" alt="">
				<img src="https://lh3.googleusercontent.com/proxy/SKVl5gme8V0lcnknPEkDaalhdouzQzMRkwZ0fxxcGggBqmKoTtO0VjR0GRc8q0OCa0dT2feRM2fyyNdM2_ai0i8DLpDjP6X-vCWJpXYODdtIg6LexTaF">
				<a href="menu1.php">Retour</a>
			</div>
			<div class="col-lg-4">
			    <p><h2 col>Enregistrement effectué</h2></p>
					<?php 
				//INFOS SUR LA DERNIERE PIECE DE CAISSE ENREGISTR
				echo "<h2>Pièce de caisse numero : " .$numpiece.'</h2><br/>';
				echo "<h2>motif : " .$motif.'</h2><br/>';
				echo "<h2>montant : " .$montant.'</h2><br/>';
				echo "<h2>destinataire : " .$destinataire.'</h2><br/>';
			?>
			<button class="btn btn-dark"><a href="depenses.php">Ajouter nouvelle piece</a></button>
			</div>
			<div class="col-lg-4">
				<p><h2>Suivi de caisse</h2><img src="https://png.pngtree.com/png-vector/20190716/ourlarge/pngtree-blue-electronic-calculator-computer-png-image_898467.jpg"></p>

				<?php //echo Date('m-Y').'<br/>';


					$enCour = Date('m-Y');
					$somme = 0;
				 $req3 = ("SELECT montant,reference FROM depenses");
				 $sql1 = $base->query($req3);
				 while ($ligne = $sql1->fetch()) {
				 	if ($ligne['reference']==$enCour) {
				 	     $somme = $somme+$ligne['montant'];
				 	}
				 	
				 }echo "<h2>Cumul des dépenses du mois en cour ".$somme."CFA</h2>";
				 ?>
				<button class="btn btn-dark"><a href="suivi.php">Plus detail..</a></button>
			</div>
		</div>



		<div class="row" ></div>
		<div class="row" ></div>
		<div class="row" ></div>
	</div>
</body>
</html>

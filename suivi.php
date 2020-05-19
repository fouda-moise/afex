<?php 
require_once('header.php');
require_once('connect.php');



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<title>suivi-pieces</title>
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
		<!--premiere ligne -->
		<div class="row" >
			<div class="col-lg-4">
				<img src="assets/images/afex.png" alt="">
				<?php //echo Date('m-Y').'<br/>';


					$enCour = Date('m-Y');
					$somme = 0;
				 $req3 = ("SELECT montant,reference FROM depenses");
				 $sql1 = $base->query($req3);
				 while ($ligne = $sql1->fetch()) {
				 	if ($ligne['reference']==$enCour) {
				 	     $somme = $somme+$ligne['montant'];
				 	}
				 	
				 }echo "<h2>Cumul des dépenses du mois en cour.. ".$somme."CFA</h2>";
				 ?>
			</div>
			<div class="col-lg-4">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQSiHduzEHzj8Mux2drgzKU2GRjHeHBb9F8OCjAN08XUaMyY9F0&usqp=CAU">

				<h3>Repartition par agence</h3>
				

				<h4>Yaoundé:</h4>
				<h4>Douala:</h4>
			</div>
			<div class="col-lg-4">
				<h3>Activité du mois</h3>
				<?php
				$req4 = ("SELECT montant,reference,motif FROM depenses ORDER BY motif ASC");
				$sql2 = $base->query($req4);
				while ($ligne = $sql2->fetch()){
					if ($ligne['reference']==$enCour) {?>
				<table class="table table-danger table-bordered table-hover"> 
					<thead class="thead-light">
					<tr><th>reference</th><th>motif</th><th>montant</th></tr>
					</thead>
					<tbody>
						<tr>
						<td><?php echo $ligne['reference']; ?></td><td><?php echo $ligne['motif']; ?></td><td><?php echo $ligne['montant'];?></td>
						</tr>
					</tbody>
			</table>
					<?php
					}
				}
				?>
			</div>
		</div>


		<!--deuxieme ligne -->
		<div class="row" ></div>
		<!--troisieme ligne -->
		<div class="row" ></div>
		<!--quatrieme ligne -->
		<div class="row" ></div>
	</div>
</body>
</html>

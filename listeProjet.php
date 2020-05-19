<?php

	require_once('connect.php');
	require_once('header.php');
?>


	
	

	    <!DOCTYPE html>
	    <html>

	    <head>
	    <meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	    	<title>afex-liste-projet</title>
	    	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	    	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
			<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
			<link rel="stylesheet" href="assets/css/bootstrap.min.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">

			<!-- Custom styles for our template -->
			<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
			<link rel="stylesheet" href="assets/css/main.css">

	    </head>

	    <body onload="window.print()" id="applique2">
	    <div class="container">
	    <div class="row">
	    	<div class="col-10"><h1 align="center">LISTE DE TRAVAUX EFFECTUES PAR AUDATECH</h1></div>
	    	<div class="col-2"><a href="selection_impression.php">Cliquez ici pour imprimer</a></div>
	    </div>
	    
	   	    <?php 

	    	$sql = "SELECT * FROM projets ORDER BY dates DESC";
			$req = $base->query($sql);	
			while ($ligne = $req->fetch()) 
			{?>
			<table class="table table-dark table-bordered table-hover"> 
				<thead class="thead-light">
					<tr><th>Numero projet</th><th>Intitule</th><th>Descripton</th><th>Client</th></tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $ligne['numero']; ?></td><td><?php echo $ligne['intitule']; ?></td><td><?php echo $ligne['description'];?></td><td><?php echo $ligne['client'];?></td>
					</tr>
				</tbody>
			</table>
		

		<?php 

			}

	    ?>
	    </div>
	    </body>
	    </html>
<?php

	require_once('connect.php');
	require_once('header.php');
?>


	
	

	    <!DOCTYPE html>
	    <html>

	    <head>
	    	<title>afex-liste-projet</title>
	    	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	    </head>

	    <body onload="window.print()">
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
			<div class="d-inline-block" style="width : 500px; background-color:#629ACE; color:#fff">
			<p>NUMERO : <?php echo $_SESSION['numero'] = $ligne['numero']; ?></p>
	  		<p>TITRE : <?php echo $ligne['intitule']; ?></p>
	   		<p>CLIENT : <?php echo $ligne['client']; ?></p>
	    	<p>DATE DE CREATION : <?php echo $ligne['dates']; ?></p>
	    	<p>RESPONSABLE : <?php echo $ligne['auteur']; ?></p>
	    		<HR size=4 align=center width="100%" color=#EE1C25>
			</div>
		

		<?php 

			}

	    ?>
	    </div>
	    </body>
	    </html>
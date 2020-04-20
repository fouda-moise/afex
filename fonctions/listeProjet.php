<?php

	require_once('connect.php');
	require_once('../header.php');

	$sql = "SELECT * FROM projets ORDER BY dates DESC";
	$req = $base->query($sql);

	while ($ligne = $req->fetch()) 
	{?>
	 <p>NUMERO : <?php echo $ligne['numero']; ?></p>
	  <p>TITRE : <?php echo $ligne['intitule']; ?></p>
	   <p>CLIENT : <?php echo $ligne['client']; ?></p>
	    <p>DATE DE CREATION : <?php echo $ligne['dates']; ?></p>	
		
	<HR size=2 align=center width="100%">

	<?php
	}


	?>
<?php 
	require('connect.php');
	require('header.php');

	$req1 = " SELECT intitule FROM projets ORDER BY dates DESC";

	$resultat = $base->query($req1);

	while ($ligne = $resultat->fetch()){ ?>
		<select>
		    <?php  echo '<option>'.$ligne['intitule'].'</option>';   ?>
		</select>
		
	<?php	
	}

<?php
		require_once('connect.php');

		$req2 = " SELECT * FROM projets ORDER BY dates DESC LIMIT 10 ";

		$resultat = $base->query($req2);

		while ( $ligne = $resultat->fetch()) {
			# code...
			
				echo $ligne['intitule'].'<br>';
			
			
		}


?>
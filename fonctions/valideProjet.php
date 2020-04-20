<?php
	//INCLUSION DES FONCTIONS
	require_once('../header.php');
	require_once('connect.php');

	
	 $numero = $_POST['numero'];
	 $intitule = $_POST['intitule'];
	 $description = $_POST['description'];
	 $client = $_POST['client'];
	 $auteur = $_POST['auteur'];
	 $dates = $_POST['dates'];

	 // ON TESTE SI LE FORMULAIRE A ETE SOUMIS
	 	if ( !empty ($_POST['intitule']) && !empty ($_POST['client'])  ) {
	 			# code...
	 		 $sql = $base->prepare('INSERT INTO projets(numero,intitule,description,client,auteur,dates) VALUES(:numero, :intitule, :description, :client, :auteur, :dates)');
			 $sql->execute(array(
			 	'numero' =>$numero, 
			 	'intitule' =>$intitule,
			 	'description' =>$description,
			 	'client' => $client,
			 	'auteur' =>$auteur,
			 	'dates' => $dates ));

			  //echo "<script type=\"text/javascript\"> alert(\"Votre projet a bien été ajouter....merci\"); </script>";
			 // echo "<script>alert('Nouveau projet ajouter avec succès...');</script>";
	 		}	
				
			

			 
	//
			

			 header('Location:../menu1.php');
			

	

?>
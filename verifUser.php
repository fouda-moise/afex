<?php
	require_once('show_error.php');
	//lancement de la session
	require_once('header.php');
	$_SESSION['nom'] = $_POST['nom'];
	
	//connection a la bd
	require_once('connect.php');

	//VERIFICATION DU USER ET DU PASSWORD

	$sql = 'SELECT * FROM user';
	$req = $base->query($sql);
	while ($ligne = $req->fetch()) 
	{
		if ($ligne['nom'] == $_POST['nom'] AND $ligne['pass'] == $_POST['pass']) 
		{
		    $_SESSION['ville'] = $ligne['ville'];
			header('Location:menu1.php');
			exit();

		}else{
			header('Location:index.php');     
		}
		
	}
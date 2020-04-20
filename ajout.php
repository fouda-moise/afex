<?php 

	include("connect.php");

	$description=$_POST["description"];
	$nom=$_FILES["file"]["name"];
	$taille=$_FILES["file"]["size"];

	list($name, $ext) = explode(".", $nom);

	$chemin = "C:\Users\Audatech Sarl\Documents\moîse".$nom;

	move_uploaded_file($PDO_POST_FILES["file"]["tmp_name"], $chemin);

	$req = $base->prepare("INSERT INTO fichier(file,titre,description,taille) VALUES('$nom','$name','description','$taille');");
	$req->execute(array(
		'file' =>$nom,
		'titre' =>$name,
		'description' =>$description,
		'taille' =>$taille));

	echo "Bien  joué Moîse";%M


?>
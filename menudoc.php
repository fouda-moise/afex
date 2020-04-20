<?php
require_once('header.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>menu-document</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
<p>Audatech Files Exchange 1.0</p>
<p>Bienvenu Mr.<?php echo $_SESSION['nom'];  ?></p>
<p>Agence de <?php echo $_SESSION['ville'] ?></p>
<a href="newDoc.php"> AJOUTER UN DOCUMENT A UN PROJET</a><br/><br/>

<a href="#"> RECHERCHER UN DOCUMENT</a>
</body>
</html>
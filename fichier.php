<?php

	include("connect.php");

	$date = gmdate("H\hi");
	echo $date;

?>



<!DOCTYPE html>
<html>
<head>
	<title>.:: ENJOY BABY ::.</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="ajout.php">
	<br />
	Image : <input type="file" name="file">
	<br />
	<br />
		Description
	<br />
	<textarea name="description"></textarea>
	<br />
	<br />
	<input type="submit"  value="valider">

</form>
</body>
</html>


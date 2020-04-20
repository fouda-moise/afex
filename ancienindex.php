<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>AFEX</title>

	<link rel="stylesheet"  href="/css/afex.css">
	
</head>

<body>

	<div id="first">

	<form action="verifUser.php" method="POST" >

				<img src="images/newlogo.gif" id="logo">

                <h1 align="center">AFEX</h1>
                
                <label class="one"><b>Nom d'utilisateur</b></label></br>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom" required></br></br>

                <label class="one"><b>Mot de passe</b></label></br>
                <input type="password" placeholder="Entrer le mot de passe" name="pass" required></br></br>

                <input type="submit" id='submit' value='Entrer' class="submit">
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?></br></br></br>

                <div id="copyrights"><p>powered by Aud@tech Copyright 2020</p></div>
                
            </form>
       </div>

</body>
</html>


           
        
            <!DOCTYPE html>
            <html>
            <head>
            	<title>AFEX</title>
            	<link rel="stylesheet" type="text/css" href="/css/afex.css">
            </head>
            <body>
            		 <form action="verifUser.php" method="POST">
                <h1>AFEX</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom" required></br></br>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="pass" required></br></br>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?></br>
                <p><em>powered by Aud@tech Copyright 2020</em></p>
            </form>
            </body>
            </html>
    


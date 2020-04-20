<?php 
require_once('header.php');
require_once('connect.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>afex-connection</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>


<body>
		<div class="container" style="border: 1px solid #fff; height:40px;">
			
		<div class="row">

			
			
			<div class="col-4" ></div>

			<div class="col-8" ></div>

			
		</div>

		<div class="row">
			
			<div class="col-3" ></div>
			<div class="col-6" ></div>
			<div class="col-3" ></div>
			
		</div>

		<div class="row">
			
			<div class="col-2" ></div>
			<div class="col-8">

				<div class="container">

					<h1>AFEX</h1>

					<form action="verifUser.php" method="post">

					
								<img src="images/newlogo.gif" id="logo">
						<fieldset>

								<legend>INTERFACE ADMINISTRATIVE</legend>
								<div class="form-group">

									<label for="nom">nom</label>
									<input class="form-control form-control-sm" type="text" name="nom">
								</div>

								<div class="form-group">

									<label for="pass">Mot de passe</label>
									<input class="form-control form-control-sm" type="password" name="pass">
								</div>

								<button class="btn btn-primary" type="submit">Entrer</button>

						</fieldset>
											
					</form><br/>
					<div><p>powered by Aud@tech Copyright 2020</p></div>
				</div>




			</div>
			<div class="col-2" ></div>
			
		</div>







		</div>
</body>
</html>
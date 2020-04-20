<!DOCTYPE html>
<html>
<head>
	<title>test-form-bootstrap</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		
	<h1>NOUVEAU PROJET</h1>

	<form action="#" method="#">

	<fieldset>
		
	<legend>Enregistrement d'un nouveau projet</legend>

	<div class="form-group">
		<label for="nom" >Entrez votre nom</label>
		<input type="text" class="form-control form-control-sm mb-3" id="nom">

	</div>

	<div class="form-group">
		<label for="selection" >Selectionner projet</label>
		
		<select id="selection" class="form-control">
		
		<option value="">Liste de choix</option>	
		
		<optgroup label="Groupe d'option 1" >
			
				<option value=""> option1 </option>
				<option value=""> option2 </option>
				<option value=""> option2 </option>

		</optgroup>	

		<optgroup label="Groupe d'option 2" >

				<option value=""> option4 </option>
				<option value=""> option5 </option>
				<option value=""> option6 </option>

		</optgroup>	


		</select>

	</div>

	<div class="input-group- mb-3">
	<div class="form-group">

		<label for="description">Description</label>

		<textarea class="form-control" id="description" rows="3"></textarea>

	</div>
	</div>

	<div class="form-group input-group-sm mb-3">
	<div class="input-group-pepend">
		<span class="input-group-text" >Biographie</span>
	</div>
	<textarea class="form-control" arial-label="Biographie"  ></textarea>

			<label for="envoi">Attacher un document</label>
			<input type="file" class="form-control-file"  name="envoi">

	</div>

	<div class="form-group mb-5">
		
		<label for="intervalle">Intervalle</label>
		<input  class="form-control-range" type="range" id="intervalle">

	</div>

	<button class="btn btn-primary" type="submit">Envoyer</button>


	</fieldset>
		
	</form>
	
	</div>





</body>
</html>
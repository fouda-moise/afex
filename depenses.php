<?php
require_once('header.php');
require_once('connect.php');


?>
<!DOCTYPE html>
<html>
<head>
	<title>piece de caisse</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>afex-connection</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="applique1">
<div class="container">
	<div class="row">
		<div class="col-lg-4"><h1><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/CashRegister.svg/220px-CashRegister.svg.png">Caisse</h1><br />
		
			<img src="https://blog.wity.fr/wp-content/uploads/2018/11/rawpixel-602154-unsplash-min-1920x1080.jpg">
		</div>
		<div class="col-lg-4">
			<h2><i> pièce de caisse</i> </h2>
			<form method="post" action="validepiece.php" id="applique2">

			        <div class="form-group">

			          <label for="numpiece" id="labelcaisse">Numero</label>
			          <input id="inputcaisse"  class="form-group"   type="text" name="numpiece" value="<?php require_once('code_piece.php'); ?>">
			        </div>

			        <div class="form-group">
			          <label for="motif" id="labelcaisse">Motif du décaissement</label>
			          <textarea class="form-control" name="motif" rows=""></textarea>
			        </div>

			        <div class="form-group">
			          <label for="montant" id="labelcaisse">Montant</label>
			          <input class="form-group"   type="text" name="montant">
			        </div>

			        <div class="form-group">
			          <label for="destinataire" id="labelcaisse">Destinataire</label>
			          <input class="form-group"   type="text" name="destinataire">
			        </div>

			        <div class="form-group">
			          <label for="reference" id="labelcaisse">Référence facture *</label>
			          <input class="form-group"   type="text" name="reference" value="<?php require_once('code_ref.php'); ?>">
			        </div>

			        <div class="form-group">
			          <label for="observation" id="labelcaisse">Observation</label>
			          <textarea class="form-control" name="observation" rows=""></textarea>
			        </div>

			        <div class="form-group">
			     
			      <button class="btn btn-primary" type="submit">Valider</button> 
			    </div>
        
      </form>				
		</div>

		<div class="col-lg-4">
		<i><em><bold>Date:<?php echo date('d-m-y h:i:s'); ?></i></bold></em>
		<img src="https://www.c2m.ma/wp-content/uploads/2020/03/alkhadim-tresorerie.jpg">
		<img src="https://www.ict-pro.be/wp-content/uploads/2019/04/ticket.jpg">
		</div>

	

	<div class="row">
		<div class="col-lg-4">
			
			
		</div>
		<div class="col-lg-4">
			
		</div>
		<div class="col-lg-4">
			
			
		</div>
	</div>

	<div class="row">
		
	</div>
</div>
</body>
</html>
<?php
	require("header.php");
	require("connect.php");

	$chars = '0123456789';

    $codes = str_shuffle($chars);

    $code = substr($codes,0,2);
 
 	 $date1 = date('mY');

 	// strtoupper( $_SESSION['intitule'] = $_POST['intitule'].'<br>');


 				$req = "SELECT * FROM projets";

 				$resultat = $base->query($req);
 				
 					# code...
 					//  strtoupper( $_SESSION['intitule'] = $_POST['intitule'].'<br>');

 					echo substr($codes, 0,2).$code.'-'.$_SESSION['ville'].$date1.'<br>';
 					 //echo $_POST['type'].'<br/>';
 					 //echo $_POST['intitule'].'<br/>';
 					 //echo $_SESSION['intitule'].'<br/>';

	 				// echo $_POST['type'];

	 				if (isset($_POST['btn'])) 

	 					echo $_POST['type'];
	 					echo $_POST['intitule'];
	 				{
 				# code...

		 				$name = $_FILES['myfile']['name'];
		 				$type = $_FILES['myfile']['type'];
		 				$data = file_get_contents($_FILES['myfile']['tmp_name']);
		 				$stmt = $base->prepare("insert into myblob value('',?,?,?)");
		 				$stmt->bindParam(1,$name);
		 				$stmt->bindParam(2,$type);
		 				$stmt->bindParam(3,$data);
		 				$stmt->execute();





 				 }
 				 //COPIE DANS LA TABLE DOCUMENT
 				//echo $today = date("F j, Y, g:i a").'<br />'; // 
 				//echo $_SESSION['projet'];
 ?>

<p></p>
<ol>
	<?php 
		$stat = $base->prepare("select * from myblob");
		$stat->execute();
		while ($row = $stat->fetch()) {
			# code...
			echo "<li>
						<a target='_blank' href='view.php?id=".$row['id']."'>".$row['name']."</a></br>
						<embed src='data: ".$row['mime'].";base64,".base64_encode($row['data'])."' width='200' />
				 </li>";

		}

	?>
</ol>
 
 	
 	

 	


 





<?php
 try {
    $base = new PDO('mysql:host=localhost; dbname=afex', 'root','');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
?>
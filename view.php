<?php 
require('connect.php');

$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $base->prepare("select * from myblob where id=? order by DESC");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:'.$row['mime']);
echo $row['data'];
?>
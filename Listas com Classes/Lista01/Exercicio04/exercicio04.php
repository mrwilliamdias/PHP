<?php 
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n = $_GET["nome"]; 
 
require_once('exercicio04.class.php');

$m1 = new media();
$m1->mediaAluno($n1,$n2,$n3,$n4);
$m1->resultado($n,$n1,$n2,$n3,$n4);


 ?>

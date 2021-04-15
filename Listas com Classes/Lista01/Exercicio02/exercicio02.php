<?php 
$l =  $_GET["l"];
$km = $_GET["km"];

require_once('exercicio02.class.php');

$cm1 = new consumo();

$cm1->consumoMedio($km,$l);
$cm1->resultado($km,$l);

 ?>
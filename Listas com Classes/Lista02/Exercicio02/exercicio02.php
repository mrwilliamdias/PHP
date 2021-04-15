<?php
$c = $_GET["cot"];
$d = $_GET["dol"];

require_once('exercicio02.class.php');

$c1 = new cotacao();
$c1->contacaoDolar($c,$d);
$c1->resultado($c,$d);

?>
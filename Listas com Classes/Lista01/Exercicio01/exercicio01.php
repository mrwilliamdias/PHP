<?php

$se = $_GET["selecionar"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];

require_once('exercicio01.class.php');

$c1 =  new calculadora();

$c1->calculo($se,$n1,$n2);
$c1->resultado($se,$n1,$n2);

?>
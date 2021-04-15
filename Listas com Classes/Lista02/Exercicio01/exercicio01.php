<?php
$a = $_GET["a"];
$b = $_GET["b"];

require_once('exercicio01.class.php');

$t = new troca();
$t->trocarValores($a,$b);
$t->resultado($a,$b);
?>
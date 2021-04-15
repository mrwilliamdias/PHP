<?php 
$v = $_GET["vendas"]; 
$s = $_GET["sal"];
$n = $_GET["nome"];

require_once('exercicio03.class.php');

$v1 = new salario();

$v1->comissao($v);
$v1->salarioFinal($s);
$v1->resultado($n,$v,$s);

 ?>
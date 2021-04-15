<?php
$m = $_GET["mes"];

require_once('exercicio03.class.php');

$m1 = new poupanca();
$m1->rendimento($m);
$m1->valorMensal($m);
$m1->resultado($m);

?>
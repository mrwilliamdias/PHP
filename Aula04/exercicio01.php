<?php
$se = $_GET["selecionar"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];

if($se == "somar"){
	$r = $n1 + $n2;
	echo "Resultado:".$r; 
} elseif($se == "dividir"){
	$r = $n1 / $n2;
	echo "Resultado:".$r; 
} elseif($se == "multiplicar"){
	$r = $n1 * $n2;
	echo "Resultado:".$r; 
} elseif($se == "subtrair"){
	$r = $n1 - $n2;
	echo "Resultado:".$r; 
}
?>
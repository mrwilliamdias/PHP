<?php
$f = $_GET["fab"];

	$i = $f * 0.45;
	$vi = $i + $f;
	$d = $vi * 0.28;
	$vd = $d + $vi;	
?>

<!DOCTYPE>
<html lang=pt-br>
<head>
	<meta charset=UTF-8>
	<title>Questão 01</title>
</head>
<body>
	<table border="1">
	<form>
	<tr><th>Custo ao Consumidor</th></tr>
	<tr><td><?php echo "Valor de Fabrica(R$): ".$f;  ?></td></tr>
	<tr><td><?php echo "Valor dos Impostos(R$): ".$i;  ?></td></tr>
	<tr><td><?php echo "Valor de Fabrica+Impostos(R$): ".$vi;  ?></td></tr>
	<tr><td><?php echo "Valor do Percentual do Distribuidor(R$): ".$d;  ?></td></tr>
	<tr><td><?php echo "Valor do Custo Final(R$): ".$vd;  ?></td></tr>
	</form>
	</table>
</body>
</html>
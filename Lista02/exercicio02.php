<?php
$c = $_GET["cot"];
$d = $_GET["dol"];

$r = $c * $d;
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
	<tr><th>Cotação do Dolar</th></tr>
	<tr><td><?php echo "Valor Convertido em Real(R$): ".$r;  ?></td></tr>
	</form>
	</table>
</body>
</html>
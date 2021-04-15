<?php
$a = $_GET["a"];
$b = $_GET["b"];

$c = $a;
$b = $a;
$a = $b;
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
	<tr><th>Troca de Valores</th></tr>
	<tr><td><?php echo "O Valor de 'A' Agora e: ".$a;  ?></td></tr>
	<tr><td><?php echo "O Valor de 'B Agora e: ".$b;  ?></td></tr>
	</form>
	</table>
</body>
</html>
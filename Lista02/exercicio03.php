<?php
$m = $_GET["mes"];

$r = $m * 0.07;
$vf =  $m + $r;
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
	<tr><th>Poupança</th></tr>
	<tr><td><?php echo "Valor do Rendimento:".$r;  ?></td></tr>
	<tr><td><?php echo "Valor Atual + Rendimento:".$vf;  ?></td></tr>
	</form>
	</table>
</body>
</html>
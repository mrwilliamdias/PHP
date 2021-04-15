<?php
$va = $_POST["va"];
$vb = $_POST["vb"];

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
	<tr><td><?php echo "Valor A: ".$va ?></td></tr>
	<tr><td><?php echo "Valor B: ".$vb ?></td></tr>
	<tr><td><?php if ($va > $vb) {
		echo "O Valor A eh o MAIOR";
	} else{
		echo "O Valor B eh o MAIOR";
	}?></td></tr>
	</form>
	</table>
</body>
</html>
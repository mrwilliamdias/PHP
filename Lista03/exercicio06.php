<?php
$n = $_POST["nome"];
$s = $_POST["sal"];
$v = $_POST["vendas"];
$p = $_POST["perc"];

$pc = $v*($p/100);
$sf = $s + $pc;

?>

<!DOCTYPE>
<html lang=pt-br>
<head>
	<meta charset=UTF-8>
	<title>Questão 04</title>
</head>
<body>
	<table border="1">
	<form>
	<tr><th>Salario Vendedor</th></tr>
	<tr><td><?php echo "Nome do Vendedor: ".$n; ?></tr></td>
	<tr><td><?php echo "Salario Fixo: ".$s; ?></tr></td>
	<tr><td><?php echo "Valor das vendas: ".$v; ?></tr></td>
	<tr><td><?php echo "Porcentagem da Comissao: ".$p."%"; ?></tr></td>
	<tr><td><?php echo "Valor da Comissao: ".$pc; ?></tr></td>
	<tr><td><?php echo "Salario Liquido: ".$sf; ?></tr></td>
	</form>
	</table>
</body>
</html>
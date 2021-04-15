<?php
$d = $_POST["data"];
$v = $_POST["val"];
$pr = $_POST["pres"];

	$pa = $v/$pr;

?>

<!DOCTYPE>
<html lang=pt-br>
<head>
	<meta charset=UTF-8>
	<title>Questão 07</title>
</head>
<body>
	<table border="1">
	<form>
	<tr><th>Valor das Prestações</th></tr>
	<tr><td><?php echo "Valor Total: R$".$v; ?></tr></td>
	<tr><td><?php echo "Valor das Parcelas: R$".$pa; ?></tr></td>
	<tr><th><?php for ($i=0; $i<$pr; $i++) {
	$d = date('d-m-Y', strtotime("+1 month", strtotime($d)));
	echo $d."<br>";} ?></tr></th>
	</form>
	</table>
</body>
</html>
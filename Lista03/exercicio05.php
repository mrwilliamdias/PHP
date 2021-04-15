<?php
$v = $_POST["val"];
$c = $_POST["com"];

switch ($c) {
		case "a":
			$d = $v * 0.25;
			$vf = $v - $d;
		
			break;
		
		case "g":
			$d = $v * 0.21;
			$vf = $v - $d;
			
			break;

		case "d":
			$d = $v * 0.14;
			$vf = $v - $d;
			
			break;			
		
		default:
			echo "Valores Nao Encontrados no Sistema";
}
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
	<tr><th>Calculadora de Descontos CARANGO</th></tr>
	<tr><td><?php echo "Valor do Automovel: ".$v; ?></tr></td>
	<tr><td><?php switch ($c) {
		case "a":
			echo "Tipo de Combustivel: Álcool";
		
			break;
		
		case "g":
			echo "Tipo de Combustivel: Gasolina";
			
			break;

		case "d":
			echo "Tipo de Combustivel: Diesel";
			
			break;			
		
		default:
			echo "Valores Nao Encontrados no Sistema";
} ?></tr></td>
	<tr><td><?php echo "Valor do Desconto: ".$d; ?></tr></td>
	<tr><td><?php echo "Valor Final: ".$vf; ?></tr></td>
	</form>
	</table>
</body>
</html>
<?php
$n = $_POST["nome"];
$v = $_POST["valor"];
$c = $_POST["codigo"];

switch ($c) {
	case '1':
		$a = $v * 0.15;
		break;
	case '3':
		$a = $v * 0.20;
		break;
	case '5':
		$a = $v * 0.25;
		break;
	case '7':
		$a = $v * 0.30;
		break;			
	default:
		echo "Codigo Inválido";
		break;
}

$vf = $a + $v;
  ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio 06</title>
</head>
<body>
	<table>
		<form>
			<tr>
				<th>
					Código Produto 
				</th>
			</tr>
			<tr>
				<td>
					Nome do produto: <?php echo $n; ?>
				</td>
			</tr>
			<tr>
				<td>
					Valor Inicial do Produto: <?php echo $v; ?>
				</td>
			</tr>
			<tr>
				<td>
					Valor do Aumento: <?php echo $a; ?>
				</td>
			</tr>
			<tr>
				<td>
					Valor Final do Produto: <?php echo $vf; ?>
				</td>
			</tr>
			<tr>
				<th>
					<a href="Exercicio06.html">Inserir Um Novo Valor</a>
				</th>
			</tr>
		</form>
	</table>
</body>
</html>
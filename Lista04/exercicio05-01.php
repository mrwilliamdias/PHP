<?php 
$a = $_POST["numA"];
$b = $_POST["numB"];
$s = $_POST["selecionar"];

switch($s){
	case "soma":
		$r = $a + $b;
		break;
	case "subtracao":
		$r = $a - $b;
		break;
	case "multiplicacao":
		$r = $a * $b;
		break;
	case "divisao":
		$r = $a / $b;
		break;
	case "resto":
		$r = $a % $b;
		break;
	default:
		echo "Não Selecionado";
		break;
}
?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio 05</title>
</head>
<body>
	<table>
		<form>
			<tr>
				<th>
					Resultado Calculadora
				</th>
			</tr>
			<tr>
				<td>
					Valor de 'A': <?php echo $a; ?>
				</td>
			</tr>
			<tr>
				<td>
					Valor de 'B': <?php echo $b; ?>
				</td>
			</tr>
			<tr>
				<td>
					Operação Selecionada: <?php echo $s; ?>
				</td>
			</tr>
			<tr>
				<td>
					Resultado: <?php echo $r; ?>
				</td>
			</tr>			
			<tr>
				<th>
					<a href="Exercicio05.html">Novo Calculo</a>
				</th>
			</tr>
		</form>
	</table>
</body>
</html>
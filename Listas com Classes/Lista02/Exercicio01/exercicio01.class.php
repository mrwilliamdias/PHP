<?php
class troca
{

	function trocarValores($a,$b)
	{
		$b = $b - $a;
		$a = $b + $a;
		$b = $a - $b;
	}

	function resultado($a,$b)
	{
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
				<tr><td><?php echo "O Valor de 'A' Agora é: ".$a;  ?></td></tr>
				<tr><td><?php echo "O Valor de 'B Agora é: ".$b;  ?></td></tr>
			</form>
		</table>
		</body>
		</html>
		<?php
	}
}
?>
<?php 
$l = $_POST["login"];
$s = $_POST["senha"];

if ($l ==""){
	$msg1 = "Login Não Digitado";
	echo "<p>".$msg1;
} else {
	echo "";
}
if ($s =="") {
	$msg2 = "Senha Não Digitada";
	echo "<p>".$msg2;
} else {
	echo "";
}
if ($l=="admin") {
	echo "";
} else {
	$msg3 = "Login Inválido";
	echo "<p>".$msg3;
}
if ($s=="12345") {
	echo "";
} else {
	$msg4 = "Senha Inválida";
	echo "<p>".$msg4;
}
if (($l=="admin")&&($s=="12345")) { ?>
<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio 05</title>
</head>
<body>
	<table>
		<form action="exercicio05-01.php" method="POST">
			<tr>
				<th>
					Calculadora
				</th>
			</tr>
			<tr>
				<td>
					Informe o valor de 'A': <input type="number" name="numA">
				</td>
			</tr>
			<tr>
				<td>
					Informe o Valor de 'B': <input type="number" name="numB">
				</td>
			</tr>
			<tr>
			</tr>
			<tr>
				<th>
					Selecione:
					<select name="selecionar">
						<option value="soma">Soma</option>
						<option value="subtracao">Subtração</option>
						<option value="multiplicacao">Multiplicação</option>
						<option value="divisao">Divisão</option>
						<option value="resto">Resto da Divisão</option>	
					</select>
				</th>
			</tr>
			<tr>
				<th>
					<input type="submit" name="enviar" value="Enviar">
				</th>
			</tr>
		</form>
	</table>
</body>
</html>
	<?php } else {
	echo "<p>".$msg3." e ".$msg4;
}
 ?>
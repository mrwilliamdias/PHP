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
					Menu de Exercicios
				</th>
			</tr>
			<tr>
				<td>
					<a href="Exercicio01.html">Situação do Aluno</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="Exercicio02.html">Par ou Ímpar</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="Exercicio03.html">Estado Cívil</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="Exercicio04.html">Categoria do Atleta</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="Exercicio05.html">Calculadora</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="Exercicio06.html">Reajuste de Preço</a>
				</td>
			</tr>
			<tr>
				<th>
					
				</th>
			</tr>
		</form>
	</table>
</body>
</html>
	<?php } else {
	echo "<p>".$msg3." e ".$msg4."<p>Acesso Restrito";
}
 ?>
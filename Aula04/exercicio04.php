<?php 
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$n4 = $_GET["n4"];
$n = $_GET["nome"]; 
 
$m = ($n1+$n2+$n3+$n4)/4;
 ?>

 <!DOCTYPE>
<html lang=pt-br>
<head>
	<meta charset=UTF-8>
	<title>Questão 04</title>
</head>
<body>
	<table border="1">
	<form action="exercicio04.php" method="get">
	<tr><th>Notas do Semestre</th></tr>
	<tr><td><?php echo "Nome do Aluno: ".$n;?></td></tr>
	<tr><td><?php echo "Nota 1º Semestre: ".$n1; ?></td></tr>
	<tr><td><?php echo "Nota 2º Semestre: ".$n2; ?></td></tr>
	<tr><td><?php echo "Nota 3º Semestre: ".$n3; ?></td></tr>
	<tr><td><?php echo "Nota 4º Semestre: ".$n4; ?></td></tr>
	<tr><td><?php echo "Media Aritmetica: ".$m; ?></td></tr>
	</form>
	</table>
</body>
</html>
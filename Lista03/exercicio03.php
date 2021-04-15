<?php
$n = $_POST["nome"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

	$m = ($n1+$n2+$n3)/3;
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
	<tr><th>Média do Aluno</th></tr>
	<tr><td><?php echo "Nome do Aluno: ".$n;  ?></td></tr>
	<tr><td><?php echo "Nota no 1º Semestre: ".$n1;  ?></td></tr>
	<tr><td><?php echo "Nota no 2º Semestre: ".$n2;  ?></td></tr>
	<tr><td><?php echo "Nota no 3º Semestre: ".$n3;  ?></td></tr>
	<tr><td><?php echo "Media do Aluno: ".$m;  ?></td></tr>
	<tr><td><?php if($m <= 5){
		echo "Aluno Reprovado";
	} elseif ($m < 7) {
		echo "Aluno em Recuperacao";
	} else{
		echo "Aluno Aprovado";
	} ?></td></tr>
	</form>
	</table>
</body>
</html>
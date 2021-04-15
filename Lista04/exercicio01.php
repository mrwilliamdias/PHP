<?php 
$n = $_POST["nome"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$m = ($n1+$n2+$n3+$n4)/4;
 ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio01</title>
</head>
<body>
	<table>
		<form>
			<tr><th>Boletim do Aluno</th></tr>
			<tr><td>Nome do Aluno: <?php echo $n;  ?></td></tr>
			<tr><td>Nota 1ª Bimestre: <?php echo $n1;  ?><td></tr>
			<tr><td>Nota 2ª Bimestre: <?php echo $n2;  ?></td></tr>
			<tr><td>Nota 3ª Bimestre: <?php echo $n3;  ?></td></tr>
			<tr><td>Nota 4ª Bimestre: <?php echo $n4;  ?></td></tr>
			<tr><td>Média do Aluno: <?php echo $m;  ?></td></tr>
			<tr><th><?php 
						if ($m<5) {
							echo "Aluno Reprovado";
						} else if($m<7){
							echo "Aluno em Recuperacao";
						} else{
							echo "Aluno Aprovado";
						}
			 ?></th></tr>
		</form>
	</table>
</body>
</html>
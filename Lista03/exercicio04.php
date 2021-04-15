<?php
$n = $_POST["nome"];
$se = $_POST["sexo"];
$i = $_POST["idade"];
$sa = $_POST["saude"];
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
	<tr><th>Média do Aluno</th></tr>
	<tr><td><?php echo "Nome do Aluno: ".$n;  ?></td></tr>
	<tr><td><?php if($se=="M"){
		echo "Sexo: Masculino";
	}elseif($se=="F"){
		echo "Sexo: Feminino";
	}  ?></td></tr>
	<tr><td><?php echo "Idade: ".$i;  ?></td></tr>
	<tr><td><?php if ($sa=="S"){
		echo "Saude: Saudavel";
	} elseif($sa=="E"){
		echo "Saude: Enfermo";
	}  ?></td></tr>
	<tr><td><?php if (($se=="M")&&($i>=18)&&($sa=="S")) {
		echo "Apto Para o Servico Militar";
	} else {
		echo "Não Esta Apto Para o Servico Militar";
	} ?></td></tr>
	</form>
	</table>
</body>
</html>
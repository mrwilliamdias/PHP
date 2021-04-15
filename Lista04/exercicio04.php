<?php 
$n = $_POST["nome"];
$i = $_POST["idade"];

 ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio04</title>
</head>
<body>
	<table>
		<form>
			<tr><th>Catogoria do Atleta</th></tr>
			<tr><td>Nome do Atleta: <?php echo $n; ?></td></tr>
			<tr><td>Idade do Atleta: <?php echo $i." Anos"; ?></td></tr>
			<tr><td>Cetegoria do Atleta: <?php 
			if (($i >= 6 )&&($i <= 10)) {
				echo "Infantil";
			} elseif (($i >= 11)&&($i <= 14)) {
				echo "Juvenil";
			} elseif (($i >= 15)&&($i <= 17)) {
				echo "Junior";
			} elseif (($i >= 18)&&($i <= 25)) {
				echo "Profissional";
			} else {
				echo "Não Catagorizado";
			}
			?></td></tr>
		</form>
	</table>
</body>
</html>
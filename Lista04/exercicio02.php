<?php 
$n = $_POST["num"];
 ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio02</title>
</head>
<body>
	<table>
		<form>
			<tr><th>Número Par ou Impar</th></tr>
			<tr><td>Número: <?php echo $n;  ?></td></tr>
			<tr><td>Número: <?php 
								if($n%2==0){
									echo "Número Par";
								} else{
									echo "Número Impar";
								}
			?></td></tr>
		</form>
	</table>
</body>
</html>
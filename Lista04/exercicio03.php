<?php 
$n = $_POST["num"];
 ?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<title>Exercicio03</title>
</head>
<body>
	<table>
		<form>
			<tr><th>Estado Civil</th></tr>
			<tr><td><?php if(isset($n){
				switch ($n) {
				case 1:
					echo "Solteiro";
					break;
				case 2:
					echo "Casado";
					break;	
				case 3:
					echo "Outros";
					break;			
				default:
					echo "Número Inválido Digitado";
					break;
			}
		} else {
			echo "Campo não preenchido";
		} ?></td></tr>
		</form>
	</table>
</body>
</html>
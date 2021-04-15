<?php
class cotacao
{

	public $r;

	function contacaoDolar($c,$d)
	{
		$this->r = $c * $d;
	}

	function resultado($c,$d)
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
				<tr><th>Cotação do Dolar</th></tr>
				<tr><td><?php echo "Atual Cotação do Dolar(R$): ".$c;  ?></td></tr>
				<tr><td><?php echo "Valor em Dolar(R$): ".$d;  ?></td></tr>
				<tr><td><?php echo "Valor Convertido em Real(R$): ".$this->r;  ?></td></tr>
			</form>
		</table>
		</body>
		</html>
		<?php
	}
}
?>
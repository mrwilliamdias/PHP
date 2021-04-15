<?php
class poupanca
{

	public $vr;
	public $r = 0.07;
	public $vm;

	function rendimento($m)
	{
		$this->vr = $m * $this->r;
	}

	function valorMensal($m)
	{
		$this->vm = $m + $this->vr;
	}

	function resultado($m)
	{
		?>
		<!DOCTYPE>
		<html lang=pt-br>
		<head>
			<meta charset=UTF-8>
			<title>Questão 03</title>
		</head>
		<body>
			<table border="1">
			<form>
			<tr><th>Poupança</th></tr>
			<tr><td><?php echo "Valor Atual: R$ ".$m;  ?></td></tr>
			<tr><td><?php echo "Valor do Rendimento: R$ ".$this->vr;  ?></td></tr>
			<tr><td><?php echo "Valor Atual + Rendimento: R$ ".$this->vm;  ?></td></tr>
			</form>
			</table>
		</body>
		</html>
		<?php
	}

}
?>
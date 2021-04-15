<?php
class media
{
	public $r;

	function mediaAluno($n1,$n2,$n3,$n4)
	{
		$this->r = ($n1+$n2+$n3+$n4)/4;
	}

	function resultado($n,$n1,$n2,$n3,$n4)
	{
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
	<tr><td><?php echo "Media Aritmetica: ".$this->r; ?></td></tr>
	</form>
	</table>
</body>
</html>

<?php	
	}
}
?>
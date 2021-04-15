<?php
class salario
{
	public $c;
	public $sf;
	public $p = 0.15;

	function comissao($v)
	{
	$this->c = $v * $this->p; 
	}

	function salarioFinal($s)
	{
	$this->sf = $s + $this->c; 
	}

	function resultado($n,$v,$s)
	{
		echo "<p>Nome do Vendedor: ".$n;
		echo "<p>Salario do Vendedor: R$ ".$s;
		echo "<p>Total em Vendas: R$ ".$v;
		echo "<p>Valor da Comissão: R$ ".$this->c;
		echo "<p>Salario Final: R$ ".$this->sf;
	}
}
 ?>

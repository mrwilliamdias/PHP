<?php
class calculadora
{
	public $r;
	function calculo($se,$n1,$n2)
	{
	if($se == "somar"){
		$this->r = $n1 + $n2;
	} elseif($se == "dividir"){
		$this->r = $n1 / $n2;
	} elseif($se == "multiplicar"){
		$this->r = $n1 * $n2; 
	} elseif($se == "subtrair"){
		$this->r = $n1 - $n2; 
		}
	}

	function resultado($se,$n1,$n2){
		echo "<p>Primeiro Número: ".$n1;
		echo "<p>Segundo Número: ".$n2;
		echo "<p>Função: ".$se;
		echo "<p>Resultado: ".$this->r;
	}
}
 ?>
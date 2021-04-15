<?php
class consumo
{
	public $cm;

	function consumoMedio($km,$l)
	{
	$this->cm = $km / $l; 
	}

	function resultado($km,$l)
	{
		echo "<p>Distância em Km: ".$km;
		echo "<p>Combustivél Gasto em litros: ".$l;
		echo "<p>Consumo Médio: ".$this->cm." km/l";
	}
}
 ?>

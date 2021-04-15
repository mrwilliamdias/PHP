<?php 
$com = $_GET["vendas"] * 0.15; 
$sf = $_GET["sal"] + $com;
echo "<p>"."Nome: ".$_GET["nome"]."<p>"."Salario Fixo: ".$_GET["sal"]."<p>"."Comissao: ".$com."<p>"."Salario Final: ".$sf;
 ?>
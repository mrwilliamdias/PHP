<?php 
//1º Passo - conectar no bancoo de dados
$conexao = mysqli_connect("localhost","root","","empresa");

if($conexao){
	echo "<p>Conexão realizada com sucesso.</p>";
} else{
	echo"<p>Conezão não foi realizada com sucesso</p>";
}
//2º Passo - Criar Script SQL 
$sql = "Select * from Funcionario";

//3º Passo - Executar script sql
$resultado = mysqli_query($conexao, $sql);

if(!$resultado){
	echo "<p>Não foi possível selecionar os dados</p>";
}
//4º Passo - Tratar dados recuperados do banco de dados
	#Converter objeto do BD em vetor
$arResultado = mysqli_fetch_assoc($resultado);
print_r($arResultado);

$id = $arResultado["Cod"];
$nome = $arResultado["Nome"];
$sal = $arResultado["Salario"];
echo "<p>cod: ".$id."</p>";
echo "<p>Nome: ".$nome."</p>";
echo "<p>Salario: ".$sal."</p>";

 ?>








<!DOCTYPE html>
<html>
	<head>
		<title>Listar Funcionário</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<!-- Menu -->
			| <a href="listar.php">LISTAR FUNCIONÁRIO</a>
			| <a href="index.php">CADASTRAR FUNCIONÁRIO</a> |
		<!-- Fim-Menu -->
	
		<h3>Listar Funcionário</h3>
						
		<table border="1">
			<tr>
				<th>Código</th>
				<th>Funcionário</th>
				<th>Valor</th>
				<th colspan="3">Ações</th>
			</tr>			
			<?php
				do{
			?>	
			<tr>
				<td><?php echo $arResultado["Cod"]; ?></td>
				<td><?php echo $arResultado["Nome"]; ?></td>
				<td><?php echo $arResultado["Salario"]; ?></td>
				<td>
					<a href="#">Visualizar</a>
				</td>
				<td>
					<a href="#">Editar</a>
				</td>
				<td>
					<a href="#">Excluir</a>
				</td>
			</tr>
			
			<?php 
				}while($arResultado = mysqli_fetch_assoc($resultado));
			?>
		</table>
		<p>
			<a href="index.php">+ Novo Funcionário</a>
		</p>
	</body>
</html>

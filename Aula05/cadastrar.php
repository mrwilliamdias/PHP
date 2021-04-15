<?php


 $conexao = mysqli_connect("localhost", "root", "", "empresa");


 $sql = "INSERT INTO funcionario (idFuncionario, nome, salario) VALUES ($cod,'$nome', $sal);";
 echo "<p>".$sql;

 $resultado = mysqli_query($conexao, $sql);

 if($resultado){
 echo "<p>Funcionário cadastrado com sucesso.";
 }else{
 $msg = "Não foi possível cadastrar o funcionário.";
 $msg .= mysqli_error($conexao);
 echo "<p>".$msg;

 }

 ?>
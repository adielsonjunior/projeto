<?php
function insereCliente($conexao, $nome,$endereco, $telefone, $cpf, $email, $ativo){
  
  $query = "INSERT INTO clientes (nome, endereco,telefone,cpf, email, ativo) Values ('{$nome}','{$endereco}','{$telefone}','{$cpf}','{$email}','{$ativo}')";
  
  
  $resultado = mysqli_query($conexao,$query);
  
  return $resultado;
  
  
  
  
}


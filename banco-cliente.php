<?php
function insereCliente($conexao, $nome,$endereco, $telefone, $cpf, $email, $ativo){
  
  $query = "INSERT INTO clientes (nome, endereco,telefone,cpf, email, ativo) Values ('{$nome}','{$endereco}','{$telefone}','{$cpf}','{$email}','{$ativo}')";
  
  
  $resultado = mysqli_query($conexao,$query);
  
  return $resultado;
  
}

function listaClientes($conexao){
  
    $clientes = array();
  
    $resultado = mysqli_query($conexao,"SELECT * FROM clientes");
    
    while($cliente = mysqli_fetch_assoc($resultado)){
      array_push($clientes,$cliente);
    
    }
  return $clientes;
}  

function buscaCliente($conexao,$id){
  $query = "SELECT * FROM cliente where id ={$id}";
  $resultado = mysqli_query($conexao,$id);
  
  return mysqli_fetch_assoc($resultado);
  
  
  
}
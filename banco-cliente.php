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
  $query = 'SELECT * FROM clientes where id ='.$id;
  $resultado = mysqli_query($conexao,$query);
  
  return mysqli_fetch_assoc($resultado);
  
  
  
}

function alteraCliente($conexao,$id, $nome,$endereco,$telefone,$cpf,$email,$ativo){
                    
    
    $query = "UPDATE clientes set 
    nome='{$nome}',endereco='{$endereco}',
    telefone='{$telefone}',cpf='{$cpf}',
    email='{$email}',ativo={$ativo} 
    where id={$id}";
    
    
    return mysqli_query($conexao,$query);
  
  
}

function inativaCliente($conexao,$id){
    $query = "UPDATE clientes set ativo=2 WHERE id={$id}";
    
    $resultado =  mysqli_query($conexao,$query);
    
    
    
  
}
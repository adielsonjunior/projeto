<?php require_once("conexao.php");  

function listaClientes($conexao){
  
    $clientes = array();
    
    $resultado = mysqli_query($conexao, "SELECT * FROM clientes")or die(mysqli_error($conexao));
    
    while($cliente = mysqli_fetch_assoc($resultado)){
        array_push($clientes,$cliente);
    }
  return $clientes;
   
}
<?php


require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-cliente.php");


$nome =  $_POST['nome'];  
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$ativo = $_POST['ativo'];



if(insereCliente($conexao, $nome,$endereco, $telefone, $cpf, $email, $ativo)){?>
  
  <p class="text-sucess"> Cliente <?=$nome?> Cadastrado com Sucesso</p>
<?php  
}else{
  
  $msg = mysqli_error($conexao);
  
?>

<p class="text-danger"> Cliente não foi Cadastrado<br> <?=$msg?> </p>
<?php
}


require_once("rodape.php");

?>







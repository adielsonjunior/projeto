<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");

$id = $_GET['id'];

$cliente = buscaCliente($conexao,$id);


	   $cliente['nome'] = (isset($_POST['nome'])) ? $_POST['nome'] : $cliente['nome'];
        $cliente['endereco'] = (isset($_POST['endereco'])) ? $_POST['endereco'] : $cliente['endereco'];
        $cliente['telefone'] = (isset($_POST['telefone'])) ? $_POST['telefone'] : $cliente['telefone'];
        $cliente['cpf'] = (isset($_POST['cpf'])) ? $_POST['cpf'] : $cliente['cpf'];
        $cliente['email'] = (isset($_POST['email'])) ? $_POST['email'] : $cliente['email'];
        $cliente['ativo'] = (isset($_POST['ativo'])) ? $_POST['ativo'] : $cliente['ativo'];
  
?>
<h1> Formulário de Alteração </h1>


	<form action="altera-cliente.php" method="post">
        
        
    <?php require_once "formulario-base.php"?>     
  
   

</form>
<?php 
include("rodape.php");    
?>    
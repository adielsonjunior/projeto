<?php
require_once("cabecalho.php");
      
?>

<form action="envio-cliente.php" method="post">

   
    <?php $cliente = array("id" =>"","nome" =>" ", "endereco" =>" ","telefone" =>" ", "cpf" =>" ", "email" =>" ", "ativo"=>"1"); ?>
    
    <?php require_once "formulario-base.php"?>
    
    

<?php 
include("rodape.php");
?>
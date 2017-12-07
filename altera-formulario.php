<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");

$id = $_GET['id'];

$cliente = buscaCliente($conexao,$id);
    
?>    

<h1> Formulário de Alteração </h1>



	<form action="altera-pdf.php" method="post">
        
        
    <?php require_once "formulario-base.php"?>     
             
             
             
  
            
           


        
        
        
        
        
        
        
        
        
        
        
        
   

</form>
<?php 
include("rodape.php");    
?>    
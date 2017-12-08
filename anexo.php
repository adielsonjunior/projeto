
<?php 
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("helpers.php");

$id = $_GET = 'id';


$cliente = buscaCliente($conexao,$id);

?>

<form action="upload.php" method="post" enctype="multipart/form-data" >

<table class="table table-striped table-bordered">
   
    <tr>
        <td><b>Código:</b>  <?=$cliente['id'] ?></td>
    </tr>  

    
    <tr>
        <td><b>Cliente:</b>   <?=$cliente['nome'] ?></td>
    </tr>    
        
    <tr>
        <td><b>Endereco:</b>  <?=$cliente['endereco'] ?></td>
    </tr> 
    
     <tr>
        <td><b>CPF/CNPJ:</b>   <?=$cliente['endereco'] ?></td>
    </tr>
    
    <tr>
        <td><b>E-mail:</b>   <?=$cliente['email'] ?></td>
    </tr>
                  
    <tr>
       <td><b>Ativo:</b>  <?=traduz_ativo($cliente['ativo']);?></td>
    </tr>    
        
    <tr>
        <td></td>
    </tr> 
    
    <tr>
        <td><b>Contratos:</b></td>
    </tr> 
    
    <tr>
       <td><b>Vencimento:</b> <input type="text" name="vencimento"></td>
    </tr> 
    
     <tr>
       <td><b>Contrato:</b> <input type="file"></td>
    </tr> 
        
      <tr>
       <td><input type="submit" value="Salvar"></td>
    </tr>
        
        
    </table> 
    
    
</form>


              
                   
   

<?php
require_once("cabecalho.php");
require_once("banco-pdf.php");

$id = $_GET['id'];

$pdf = buscaPdf($conexao,$id);
    
?>    

<h1> Formulário de Alteração </h1>



	<form action="altera-pdf.php" method="post">
        
        
         <table class="table">    
  
            
           

            <tr>
                <td><input type="submit" class="btn btn-primary form-control" value="Cadastrar"></td>
            </tr>    
        
        
        
        
</table>
        
        
        
        
        
        
        
        
        
        
        
        
        
   

</form>
<?php 
include("rodape.php");    
?>    
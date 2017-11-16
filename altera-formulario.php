<?php
require_once("cabecalho.php");
require_once("banco-pdf.php");

$id = $_GET['id'];

$pdf = buscaPdf($conexao,$id);
    
?>    

<h1> Formulário de Alteração </h1>



	<form action="altera-pdf.php" method="post">
        
        
         <table class="table">    
    <input type="hidden" name="id" value="<?=$pdf['id']?>"/>   
	
        
	<tr>
		<td>Nome: </td>
		<td><input type="text" class="form-control" name ="nome" value="<?=$pdf['nome']?>"></td>
	</tr>	
	
      <tr>
		<td>arquivo:</td>
		<td><input type="file" class="form-control" name="arquivo" value="<?=$pdf['arquivo']?>"></td>
	</tr>	
           
           
    <tr>
                <td>Vencimento:</td>
                <td>
                    <input type="date" class="form-control" name="vencimento" value="<?=$pdf['dataCad']?>">
                </td>
            </tr>

            <tr>


                <td>Ativo:</td>
                <td><select name="ativo">
                <option value="1">SIM </option>
                <option value="0">NÃO </option>
             
             
            </select></td>
            </tr>
            
           

            <tr>
                <td><input type="submit" class="btn btn-primary form-control" value="Cadastrar"></td>
            </tr>    
        
        
        
        
</table>
        
        
        
        
        
        
        
        
        
        
        
        
        
   

</form>
<?php 
include("rodape.php");    
?>    
<?php
require_once("cabecalho.php");
require_once("banco-pdf.php");

$id = $_GET['id'];

$pdf = buscaPdf($conexao,$id);
    
?>    

<h1> Formulário de Alteração </h1>



	<form action="altera-pdf.php" method="post">
        
    <table class="table">    
    <input type="text" name="id" value="<?=$pdf['id']?>"/>   
	
        
	<tr>
		<td>Nome: </td>
		<td><input type="text" class="form-control" name ="nome" value="<?=$pdf['nome']?>"></td>
	</tr>	
	
      <tr>
		<td>arquivo:</td>
		<td><input type="file" class="form-control" name="arquivo" value="<?=$pdf['arquivo']?>"></td>
	</tr>	
           
   	<tr>
		<td><input type="submit" class="btn btn-primary" value="Alterar"></td>
	</tr>
</table>

</form>
<?php 
include("rodape.php");    
?>    
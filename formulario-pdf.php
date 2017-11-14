<?php
require_once("cabecalho.php");

   
    
?>    

<table>
    
<form action="upload.php" method="post" enctype="multipart/form-data">
  <tr>
      <td>Nome: <input type="text" class="form-control" name="nome"> </td>
      
 </tr>
  <tr>
      <td>Contrato: <input type="file" class="form-control" name="arquivo"> </td>
     </tr>
     <tr>
    <td> <input type="submit" class="form-control" value="Cadastrar"></td>
    </tr>
</form>
</table>
<?php 
include("rodape.php");    
    
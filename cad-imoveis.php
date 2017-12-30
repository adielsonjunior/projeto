<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("logica-usuario.php");
?>
<form class="" action="envio-imoveis.php"  enctype="multipart/form-data">

 <table class="table table-striped table-bordered">

<table class="table">
<tr>
    <td><b>Imovél:<b></td>
    <td><input type="text" class="form-control" name="nome"></td>

</tr>

<tr>
    <td><b>Endereco:</td>
    <td><input type="text" class="form-control" name="endereco"></td>
</tr>

<tr>
    <td><b>Tipo</b>  </td>
      <td><input type="text" class="form-control" name="tipo"></td>
</tr>

<tr>
    <td><b>Área</b>   </td>
      <td><input type="text" class="form-control" name="area"></td>
</tr>

<tr>
    <td><b>Banheiros:</td>
        <td><input type="text" class="form-control" name="banheiros"></td>
</tr>
<tr>
    <td><b>Descrição:</td>
        <td><textarea class="form-control" name="descricao"></textarea></td>
</tr>
<tr>
    <td><b>Destaques:</td>
        <td><textarea class="form-control" name="destaques"></textarea></td>
</tr>

<tr>
    <td><b>Alugado:</td>
      <td>
          <select name="alugado" class="form-control">
            <option value="1">SIM </option>
            <option value="2">NÃO </option>
      </td>
      </tr>

<tr>
    <td><b>Vagas:</td>
        <td><input type="text" class="form-control" name="vagas"></td>
</tr>

<tr>
    <td><b>Ativo:</td>
      <td>
          <select name="ativo" class="form-control">
            <option value="1">SIM </option>
            <option value="2">NÃO </option>
      </td>
</tr>


<tr>
       <td><input type="submit" value="Salvar"></td>
    </tr>

    </table>


</form>

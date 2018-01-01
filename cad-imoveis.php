<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("logica-usuario.php");
?>
<form class="" action="processa-imovel.php"  method="post">

 <table class="table table-striped table-bordered">


   <input type="hidden" class="form-control" name="cliente_id">

<table class="table">
<tr>
    <td><b>Imovél:<b></td>
      <td><input type="text" class="form-control" name="nome"></td>
</tr>
<tr>
<td><b>Tipo</b></td>
<td>
<select name="tipo" class="form-control">
  <option value="1">Casa </option>
  <option value="2">Apartamento </option>
    <option value="3">Sala Comercial </option>
  </select>
  </td>
</tr>

<tr>
    <td><b>Endereco:</td>
    <td><input type="text" class="form-control" name="endereco"></td>
</tr>

<tr>
    <td><b>Área em m²</b>   </td>
      <td><input type="text" class="form-control" name="area"></td>
</tr>

<tr>
    <td><b>Banheiros:</td>
        <td><input type="text" class="form-control" name="banheiros"></td>
</tr>
<tr>
    <td><b>Descrição:</td>
        <td><textarea name="descricao" class="form-control"></textarea>
    </td>
</tr>
<tr>
    <td><b>Destaques:</td>


      <td>
      Escolas:<input type="checkbox"  name="Destaques" value="Perto de Escolas">
      Hospitais:<input type="checkbox"  name="Destaques" value="Hospitais">
      Creches:<input type="checkbox"  name="Destaques" value="Creches">
      Imovél Novo:<input type="checkbox"  name="Destaques" value="Imovél Novo">
    </td>
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

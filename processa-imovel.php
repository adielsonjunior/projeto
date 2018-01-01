<?php


require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-cliente.php");
require_once("logica-usuario.php");


verificar_usuario();

$cliente_id = $_POST['cliente_id'];

$nome =  $_POST['nome'];
$tipo = $_POST['tipo'];
$endereco = $_POST['endereco'];
$area = $_POST['area'];
$banheiros = $_POST['banheiros'];
$descricao = $_POST['descricao'];
$destaques = $_POST['destaques'];
$alugado = $_POST['alugado'];
$vagas = $_POST['vagas'];
$ativo = $_POST['ativo'];

?>

<form class="" action="envio-imovel.php" enctype="multipart/form-data">

 <table class="table table-striped table-bordered">

  <h2>Confira os dados Abaixo</h2>

<table class="table">
<tr>
    <td><b>Imovél:<b></td>
      <td><?=$nome?></td>
</tr>
<tr>
<td><b>Tipo</b></td>
<td> <?=$tipo?></td>
</tr>

<tr>
    <td><b>Endereco:</td>
    <td><?=$endereco?></td>
</tr>

<tr>

</tr>

<tr>
    <td><b>Área em m²</b> </td>
      <td><?=$area?></td>
</tr>

<tr>
    <td><b>Banheiros:</b></td>
        <td><?=$banheiros?></td>
</tr>
<tr>
    <td><b>Descrição:</td>
        <td><?=$descricao?> </td>
</tr>
<tr>
    <td><b>Destaques:</td>
    <td>?<?=$destaques?></td>
  </tr>

<tr>
    <td><b>Alugado:</td>
      <td>
        <?=$alugado?>
      </td>
      </tr>

<tr>
    <td><b>Vagas:</td>
        <td><?=$vagas?></td>
</tr>

<tr>
    <td><b>Ativo:</td>
      <td>
            <?=$ativo?>
      </td>
</tr>


  <tr>
        <td><b>Foto Principal:</td>

        <td><input type="file" name="foto_principal"></td>
    </tr>


<tr>
       <td><input type="submit" value="Enviar"></td>
    </tr>

    </table>


</form>

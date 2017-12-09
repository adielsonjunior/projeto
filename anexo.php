
<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("helpers.php");

$id = $_GET['id'];

$cliente = buscaCliente($conexao,$id);

$anexos = buscar_anexos($conexao, $id);

?>

<form action="upload.php" method="post" enctype="multipart/form-data" >

<table class="table table-striped table-bordered">

    <input type="hidden" name="cliente_id" value="<?php echo $cliente['id']?>"/>


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
        <td><b>CPF/CNPJ:</b>   <?=$cliente['cpf'] ?></td>
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
        <td><b>Contratos:</b>
    <!-- lista de anexos -->
    <?php if (count($anexos) > 0) : ?>
    </table>
    <table class="table table-striped table-bordered">
          <tr>
              <th>Arquivo</th>
              <th>Vencimento</th>
              <th>Opções</th>
          </tr>
              <?php foreach ($anexos as $anexo) : ?>
          <tr>
                <td><?php echo $anexo['nome']; ?> </td>
                    <td><?php echo traduz_data($anexo['vencimento']); ?> </td>
                <td>
              <a href="../anexos/cliente<?=$id?>/<?php echo $anexo['nome']; ?>">
                Download</a>

            <a href="../anexos/cliente<?=$id?>/<?php echo $anexo['arquivo'];?>">
          Excluir</a>
            </td>
          </tr>
          <?php endforeach; ?>


      <?php else : ?>
      <p>Não há contratos para o cliente.</p>
      <?php endif; ?>
      </td>
      </tr>
      </table>

      <table class="table table-striped table-bordered">
    <tr>
       <td><b>Vencimento:</b> <input type="date" name="vencimento"></td>
    </tr>

     <tr>
       <td><b>Contrato:</b> <input type="file" name="anexo"></td>
    </tr>

      <tr>
       <td><input type="submit" value="Salvar"></td>
    </tr>


    </table>


</form>


<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("helpers.php");
require_once("logica-usuario.php");


verificar_usuario();

$id = $_GET['id'];

//$cliente = buscaCliente($conexao,$id);

//$imoveis = buscar_imoveis($conexao, $id);

?>

  <table class="table table-striped table-bordered">

    <input type="hidden" name="cliente_id" value="<?php echo $cliente['id']?>"/>

      <tr>
        <a href="cad-imoveis.php">CADASTRAR IMOVEIS</a>
            <td><b>Código:</b>  <?=$cliente['id'] ?>
            <td><b>Cliente:</b>  <?=$cliente['nome'] ?></td></td>
      </tr>

  </table>

	<!-- lista de imoveis !-->

    <?php if (count($imoveis) > 0) : ?>

    <table class="table table-striped table-bordered">
  <b>Imóveis:

  <tr>
      <td><b>Imovél</b></td>
        <td align="center"><img src="img\casa.png"></td>
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

  <?php foreach ($anexos as $anexo) :?>


  <?php endforeach; ?>
  </table>
  <?php else : ?>
  <span>Não existem imoveis cadastrados para o Cliente.</span>
  <?php endif; ?>




    </table>


</form>

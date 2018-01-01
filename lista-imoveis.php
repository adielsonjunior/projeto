
<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("banco-imoveis.php");

require_once("helpers.php");
require_once("logica-usuario.php");



verificar_usuario();

$id = $_GET['id'];

$cliente = buscaCliente($conexao,$id);


$imoveis = buscar_imoveis($conexao, $id);
var_dump($imoveis);

?>

  <table class="table table-striped table-bordered">

    <input type="hidden" name="cliente_id" value="<?=$cliente['id']?>"/>

      <tr>
        <a href="cad-imoveis.php?id=<?=$cliente['id']?>">CADASTRAR IMOVEIS</a>
            <td><b>CPF/CNPJ:</b>  <?=$cliente['cpf'] ?>
            <td><b>Cliente:</b>  <?=$cliente['nome'] ?></td></td>
      </tr>

  </table>

	<!-- lista de imoveis !-->

    <?php if (count($imoveis) > 0) : ?>
        <?php foreach ($imoveis as $imovel) :?>
  <table class="table table-striped table-bordered">
  <b>Imóveis:

    <tr>
        <td><b>Cód_imóvel: </b><?=$imovel['id_imovel'] ?></td>

    </tr>

  <tr>
      <td><b>Imovél: <?=$imovel['nome'] ?></td>

  </tr>
    <td align="center"><img src="img\casa.png"></td>

  <tr>
      <td><b>Endereco:</b>  <?=$imovel['endereco'] ?></td>
  </tr>

  <tr>
      <td><b>Alugado:</b>  <?=$imovel['alugado'];?></td>
  </tr>

    <tr>
      <td><b>Ativo:</b>  <?=$imovel['ativo'];?></td>
  </tr>




  <?php endforeach; ?>
  </table>
  <?php else : ?>
  <span>Não existem imoveis cadastrados para o Cliente.</span>
  <?php endif; ?>




    </table>


</form>

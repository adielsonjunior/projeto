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

<form class="" action="envio-imovel.php" method="post" enctype="multipart/form-data">
  <h2>Confira os dados Abaixo </h2>
  <?php require_once("tabela-imoveis.php");?>

</form>

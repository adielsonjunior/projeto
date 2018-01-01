<?php


require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-cliente.php");
require_once("banco-imoveis.php");
require_once("logica-usuario.php");
require_once("helpers.php");



verificar_usuario();

$cliente_id = $_POST['cliente_id'];

$nome =  $_POST['nome'];
$endereco = $_POST['endereco'];
$area = $_POST['area'];
$banheiros = $_POST['banheiros'];
$descricao = $_POST['descricao'];
$destaques = $_POST['destaques'];
$alugado = $_POST['alugado'];
$vagas = $_POST['vagas'];
$ativo = $_POST['ativo'];
$valor_aluguel = $_POST['valor_aluguel'];
$foto_principal = $_FILES['foto_principal'];




if(!isset($_FILES['foto_principal'])){
  $tem_erros =true;
  $erros_validacao['foto_principal'] = 'Voce tem que selecionar um arquivo para anexar';

}else{
  //tratar_anexo esta no helpers
    if(tratar_anexo_imovel($_FILES['foto_principal'],$cliente_id)){
      $anexo = array();
      $anexo['cliente_id'] = $cliente_id;
      $anexo['nome'] = $_FILES['foto_principal']['name'];
      $anexo['foto_principal']=$_FILES['foto_principal']['name'];

      //Substituir os caracteres especiais
	$original = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
    $substituir = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
	$anexo['nome'] = strtr(utf8_decode($anexo['nome']), utf8_decode($original), $substituir);

	//Substituir o espaco em branco pelo traco
	$anexo['nome'] = str_replace(' ', '-', $anexo['nome']);

	//Converter para minusculo
	$anexo['nome'] = strtolower($anexo['nome']);

       //Substituir os caracteres especiais
	$original = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
    $substituir = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
	$anexo['foto_principal'] = strtr(utf8_decode($anexo['arquivo']), utf8_decode($original), $substituir);

	//Substituir o espaco em branco pelo traco
	$anexo['foto_principal'] = str_replace(' ', '_', $anexo['arquivo']);

	//Converter para minusculo
	$anexo['foto_principal'] = strtolower($anexo['arquivo']);

    }else {
      $tem_erros = true;
      $erros_validacao['anexo'] = 'Envie apenas contratos docx, pdf ou imagens';
      var_dump($erros_validacao['anexo']);
      die();
       }
   }


      gravar_imovel($conexao,$anexo);
      echo 'Anexo Cadastrado com sucesso';
      var_dump($anexo);

      ?>
      <a href="lista-clientes.php">Voltar </a>

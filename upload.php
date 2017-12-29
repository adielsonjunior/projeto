<?php
require_once("conexao.php");
require_once("cabecalho.php");
require_once("helpers.php");
require_once("banco-cliente.php");
require_once("logica-usuario.php");


verificar_usuario();

$cliente_id = $_POST['cliente_id'];
$vencimento = $_POST['vencimento'];

if(!isset($_FILES['anexo'])){
  $tem_erros =true;
  $erros_validacao['anexo'] = 'Voce tem que selecionar um arquivo para anexar';

}else{
  //tratar_anexo esta no helpers
    if(tratar_anexo($_FILES['anexo'],$cliente_id)){
      $anexo = array();
      $anexo['cliente_id'] = $cliente_id;
      $anexo['nome'] = $_FILES['anexo']['name'];
      $anexo['arquivo']=$_FILES['anexo']['name'];
      
      
      
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
	$anexo['arquivo'] = strtr(utf8_decode($anexo['arquivo']), utf8_decode($original), $substituir);
	
	//Substituir o espaco em branco pelo traco
	$anexo['arquivo'] = str_replace(' ', '_', $anexo['arquivo']);
	
	//Converter para minusculo
	$anexo['arquivo'] = strtolower($anexo['arquivo']);
      
      
      
      
     
    
      
      $anexo['vencimento'] = $vencimento;

    }else {
      $tem_erros = true;
      $erros_validacao['anexo'] = 'Envie apenas contratos docx, pdf ou imagens';
      var_dump($erros_validacao['anexo']);
      die();
       }
   }
      gravar_anexo($conexao,$anexo);
      echo 'Anexo Cadastrado com sucesso';
      var_dump($anexo);
      
      ?>
      <a href="lista-clientes.php">Voltar </a>

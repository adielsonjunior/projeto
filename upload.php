<?php
include("conexao.php");
include("cabecalho.php");
include("helpers.php");
include("banco-cliente.php");




$cliente_id = $_POST['cliente_id'];
$vencimento = $_POST['vencimento'];

if(!isset($_FILES['anexo'])){
  $tem_erros =  true;
  $erros_validacao['anexo'] = 'Voce tem que selecionar um arquivo para anexar';

}else{

    if(tratar_anexo($_FILES['anexo'],$cliente_id)){
      $anexo = array();
      $anexo['cliente_id'] = $cliente_id;
      $anexo['nome'] = $_FILES['anexo']['name'];
      $anexo['arquivo']=$_FILES['anexo']['name'];
      $anexo['vencimento'] = $vencimento;

    }else {
      $tem_erros = true;
      $erros_validacao['anexo'] = 'Envie apenas anexos pdf ou imagens';
      echo "Anexo Erro de Validacao";
      var_dump($anexo);
     }
   }
  if(!$tem_erros){
    gravar_anexo($conexao,$anexo);
    echo "Anexo cadastrado com Sucesso";

  }

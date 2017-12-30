<?php


require_once("cabecalho.php");
require_once("conexao.php");
require_once("banco-cliente.php");
require_once("logica-usuario.php");


verificar_usuario();

$nome =  $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$ativo = $_POST['ativo'];

verificar_usuario();

if(insereCliente($conexao, $nome,$endereco, $telefone, $cpf, $email, $ativo)){?>

<?php
    $ultimo_id =  mysqli_insert_id($conexao);

     //diretorio do upload

     $_UP['pasta'] ='uploads/cliente'.$ultimo_id.'/';
     mkdir($_UP['pasta'],0777);

  ?>


  <p class="text-success"> Cliente <?=$nome?><br> Cadastrado com Sucesso</p>
<?php
}else{

  $msg = mysqli_error($conexao);

?>

<p class="text-danger"> Cliente não foi Cadastrado<br> <?=$msg?> </p>
<?php
}


require_once("rodape.php");

?>

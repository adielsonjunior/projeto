 <?php

    require_once("cabecalho.php");
    require_once("banco-cliente.php");
    include("logica-usuario.php");

    verificar_usuario();

  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$ativo = $_POST['ativo'];




    if(alteraCliente($conexao,$id,$nome,$endereco,$telefone,$cpf,$email,$ativo)) { ?>


        <p class="text-success">Cliente alterado <?=$nome?></p>


    <?php
    }else{
        $msg = mysqli_error($conexao);

    ?>

    <p class="text-danger">Cliente <?=$nome; ?> não foi Alterado<br> <?=$msg?></p>
    <?php
    }

    ?>



        <?php include ("rodape.php") ?>

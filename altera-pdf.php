 <?php 

    require_once("cabecalho.php");
    require_once("banco-pdf.php");
  

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $arquivo = $_FILES['arquivo'];
    $vencimento = $_POST['vencimento'];
    


    if(alteraPdf($conexao, $id, $nome, $versao, $vencimento)) { ?>

 
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
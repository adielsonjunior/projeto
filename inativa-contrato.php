 <?php 

    require_once("cabecalho.php");
  require_once("banco-pdf.php");
 
  

    $id = $_POST['id'];
    


    if(inativaContrato($conexao, $id)) { ?>

 
        <p class="text-success">Cliente Desativado <?=$id?></p>


    <?php 
    }else{
        $msg = mysqli_error($conexao);

    ?>

    <p class="text-danger">Cliente <?=$id; ?> não foi Desativado<br> <?=$msg?></p>
    <?php
    }

    ?>



        <?php include ("rodape.php") ?>
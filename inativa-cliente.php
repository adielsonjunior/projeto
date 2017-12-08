 <?php 

    require_once("cabecalho.php");
  require_once("banco-cliente.php");
 
  

  $id = $_GET['id'];



    if(!inativaCliente($conexao, $id)) { ?>

 
        <p class="text-success">Cliente Desativado</p>
  


    <?php 
    }else{
        $msg = mysqli_error($conexao);
  
      

    ?>

    <p class="text-danger">Cliente não foi Desativado<br> <?=$msg?></p>
    
  <?php
    }

    ?>



        <?php include ("rodape.php") ?>
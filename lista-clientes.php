<?php 
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("helpers.php");
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Cód.</td>
        <td>Cliente</td>
        <td>CPF</td>
        <td>Ativo</td>
        <td>Alterar</td>
        <td>Remover</td>

    </tr>
    <a href="lista-tudo.php">Filtrar todos </a>
  
  <?php
  //referencias http://bloghospedandosites.com.br/retornar-uma-consulta-mysql-e-mostra-los-em-tabela/
    $sql = "SELECT * FROM clientes";
    
    $consulta = mysqli_query($conexao,$sql);
    
    while($registro = mysqli_fetch_assoc($consulta)){?>
  
    
        <form action="">
            <tr>
                
                <td>
                    <?=$registro['id'] ?>
                </td>
                <td>
                                      
                   <a href="anexo.php?<?=$registro['id']?>"> <?=$registro['nome']?></a>

                </td>
              
                <td>
                    <?=$registro['cpf'];?>

                </td>  
                                
                <td>
                    <?=traduz_ativo($registro['ativo']);?>

                </td>



                <td>
                    <a class="btn btn-primary" href="altera-formulario.php?id=<?=$registro['id']?>">Alterar</a>
                </td>

        </form>

        <form action="inativa-cliente.php" method="get">
            <td>
                
            <a class="btn btn-danger" href="inativa-cliente.php?id=<?php echo $registro['id']?>">Remover  </a>                   
                               
            </td>
          
       
        </form>
  
  
<?php }?>


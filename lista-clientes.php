<?php 
require_once("cabecalho.php");
require_once("banco-cliente.php");
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>codigo</td>
        <td>Cliente</td>
        <td>Contrato</td>
        <td>Cadastro</td>
        <td>Ativo</td>
        <td>Alterar</td>
        <td>Deletar</td>

    </tr>
    <a href="lista-tudo.php">Filtrar todos </a>
  
  <?php
  //referencias http://bloghospedandosites.com.br/retornar-uma-consulta-mysql-e-mostra-los-em-tabela/
    $sql = "SELECT * FROM clientes";
    
    $consulta = mysqli_query($conexao,$sql);
    
    while($registro = mysqli_fetch_assoc($consulta)){?>
  
    
        <form action="altera-formulario.pdf.php" method="post">
            <tr>
                

                <td>
                    <?=$registro['id'] ?>
                </td>
                <td>
                    <?=$registro['nome'] ?>

                </td>
                <td>
                    <a href="uploads/cliente<?=$registro['id']?>\<?=$registro['arquivo']?>">
                      <?=$registro['arquivo']?></a>
                </td>


                <td>
                    <?=$registro['vencimento'];?>

                </td>
                <td>
                    <?=$registro['ativo'];?>

                </td>




                <td>
                    <a class="btn btn-primary" href="altera-formulario.php?id=<?=$registro['id']?>">Alterar</a>
                </td>

        </form>

        <form action="inativa-cliente.php" method="post">
            <td>
                <input type="hidden" name="id" value="<?=$registro['id']?>" />
                <button class="btn btn-danger">Remover</button>
            </td>
          
       
        </form>
  
  
<?php }?>


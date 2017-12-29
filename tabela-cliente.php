<table class="table table-striped table-bordered">
    <tr>
        <td>Cód.</td>
        <td>Cliente</td>
        <td>CPF</td>
        <td>Ativo</td>
        <td>Alterar</td>
        <td>Remover</td>

    </tr>
    <a href="listar-todos.php">Filtrar todos </a>

  <?php
   
  
    foreach($listar_clientes as $registro){?>


        <form action="">
            <tr>

                <td>
                    <?=$registro['id'] ?>
                </td>
                <td>

                   <a href="anexo.php?id=<?=$registro['id']?>"> <?=$registro['nome']?></a>

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

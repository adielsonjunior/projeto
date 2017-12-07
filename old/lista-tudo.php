<?php 
require_once("cabecalho.php");
require_once("banco-pdf.php");

$pdfs = listaTodosContratos($conexao);


?>

<a href="lista-pdf.php">Filtrar Ativos </a>    
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


    <?php
	/* Usando : no fim do foreach  pq tem o endforeach*/
	foreach ($pdfs as $pdf):
	?>


        <form action="altera-formulario.pdf.php" method="post">
            <tr>
                

                <td>
                    <?=$pdf['id'] ?>
                </td>
                <td>
                    <?=$pdf['nome'] ?>

                </td>
                <td>
                  <a href="uploads/cliente<?=$pdf['id']?>\<?=$pdf['arquivo']?>"></a>
                        <?=$pdf['arquivo']?>
                </td>


                <td>
                    <?= $pdf['vencimento'];?>

                </td>
                <td>
                    <?= $pdf['ativo'];?>

                </td>




                <td>
                    <a class="btn btn-primary" href="altera-formulario.php?id=<?=$pdf['id']?>">Alterar</a>
                </td>

        </form>

        <form action="inativa-contrato.php" method="post">
            <td>
                <input type="hidden" name="id" value="<?=$pdf['id']?>" />
                <button class="btn btn-danger">Remover</button>
            </td>
        </form>


        <?php 
endforeach
?>
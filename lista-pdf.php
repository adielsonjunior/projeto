<?php 
require_once("cabecalho.php");
require_once("banco-pdf.php");

$pdfs = listaContratos($conexao);


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
                    <a href="uploads/cliente<?=$pdf['id']?>\<?=$pdf['arquivo']?>">
                      <?=$pdf['arquivo']?></a>
                </td>


                <td>
                    <?=$pdf['vencimento'];?>

                </td>
                <td>
                    <?=$pdf['ativo'];?>

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
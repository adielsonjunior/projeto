<?php 
require_once("cabecalho.php");
require_once("banco-pdf.php");

$pdfs = listaContratos($conexao);

?>

<table class="table table-striped table-bordered">
    <tr>
        <td>codigo</td>
        <td>Contrato</td>
        <td>Versão</td>
        <td>Data</td>
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
                    <a href="uploads/cliente<?=$pdf['id']?>\<?=$pdf['arquivo']?>">
                        <?=$pdf['arquivo']?>
                </td>


                <td>
                    <?= $pdf['vencimento'];?>
                     
                        <td>
                            <a class="btn btn-primary" href="altera-formulario.php?id=<?=$pdf['id']?>">Alterar
        </td>
          
     </form>
        <td>
            <form action="inativa-contrato.php" method="post">
            <input type="hidden" name="id" value="<?=$pdf['id']?>" />
            <button class="btn btn-danger">Remover</button>
            </form>        
        </td>
	</tr>		

<?php 
endforeach
?>
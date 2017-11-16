<?php
require_once("cabecalho.php");

   
    
?>

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <table class="table">
                
            <?php require_once("formulario-base.php");?>
            
            <tr>
                <td><input type="submit" class="btn btn-primary form-control" value="Cadastrar"></td>
            </tr>




        </table>
    </form>

    <?php 
include("rodape.php");
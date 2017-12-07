<?php
require_once("cabecalho.php");

   
    
?>

    <form action="envio-cliente.php" method="post">

        <table class="table">
                
            <?php require_once("formulario-cliente-base.php");?>
            
            <tr>
                <td><input type="submit" class="btn btn-primary form-control" value="Cadastrar"></td>
            </tr>




        </table>
    </form>

    <?php 
include("rodape.php");
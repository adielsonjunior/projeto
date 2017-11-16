<?php
require_once("cabecalho.php");

   
    
?>

    <form action="upload.php" method="post" enctype="multipart/form-data">

        <table class="table">
          


            <tr>
                <td>Nome: </td>
                <td><input type="text" class="form-control" name="nome" ></td>
            </tr>

            <tr>
                <td>arquivo:</td>
                <td><input type="file" class="form-control" name="arquivo"></td>
            </tr>


            <tr>
                <td>Vencimento:</td>
                <td><input type="date" class="form-control" name="vencimento"></td>
            </tr>

            <tr>


            <td>Ativo:</td>
            <td>
                <select name="ativo">
                    <option value="1">SIM </option>
                    <option value="0">NÃO </option>
                         
                </select>
                
            </td>
            </tr>



            <tr>
                <td><input type="submit" class="btn btn-primary form-control" value="Cadastrar"></td>
            </tr>




        </table>
    </form>

    <?php 
include("rodape.php");
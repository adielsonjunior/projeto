<?php error_reporting(E_ALL ^ E_NOTICE);?>

<?php require_once ("conexao.php");
require_once ("alertas.php");


?>
<html>
<head>
    <title>Contratos</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Contratos</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="formulario-cliente.php">Cadastro Cliente</a></li>
                    <li><a href="lista-clientes.php">Lista Clientes</a></li>
                    <li><a href="cad-imoveis.php">Cadastro Imoveis</a></li>




                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="principal">
      <?php
       mostraAlerta("success");
       mostraAlerta("danger");
      ?>

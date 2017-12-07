<?php error_reporting(E_ALL);?>

<?php require_once ("conexao.php");?>


<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>
   <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="formulario-pdf.php">Cadastro PDF</a></li>
                      <li><a href="formulario-cliente.php">Cadastro Cliente</a></li>
                    <li><a href="lista-pdf.php">Listar Produtos</a></li>
                    <li><a href="lista-clientes.php">Lista Clientes</a></li>
                    <li><a href="http://localhost/phpmyadmin/">admin</a></li>
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="principal">

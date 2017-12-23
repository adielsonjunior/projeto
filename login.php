<?php
include("conexao.php");
include("logica-usuario.php");

$usuario = buscar_usuario($conexao,$_POST["email"],$_POST["senha"]);
var_dump($usuario);

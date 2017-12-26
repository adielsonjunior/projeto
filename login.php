<?php
include("conexao.php");
include("logica-usuario.php");

$usuario = buscar_usuario($conexao,$_POST["email"],$_POST["senha"]);
if($usuario== null){
  header("Location: index.php?login=0");

}else{
    header("Location: index.php?login=1");
    setcookie("usuario_logado", $usuario["email"]);
}

die();

<?php
require_once("conexao.php");
require_once("logica-usuario.php");

$usuario = buscar_usuario($conexao,$_POST["email"],$_POST["senha"]);
if($usuario== null){
  $_SESSION["danger"] = "Usuário ou Senha Incorreto";
  header("Location: index.php");

}else{
    $_SESSION["success"] = "Usuário logado com Sucesso";
    header("Location: index.php");
    logar_usuario($usuario["email"]);
    var_dump($usuario);
}

die();

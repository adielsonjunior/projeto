<?php
session_start();

function buscar_usuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}


function verificar_usuario(){
  if(!usuario_esta_logado()){
    $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade";
    header("Location:index.php");
    die();
  }

}

function usuario_esta_logado(){
  return isset($_SESSION["usuario_logado"]);
}

function logar_usuario($email){
  $_SESSION["usuario_logado"] = $email;

}

function usuario_logado(){
  return $_SESSION["usuario_logado"];
}

function logout(){
  session_destroy();
  session_start();
  }

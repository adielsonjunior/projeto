<?php
session_start();

function buscar_usuario($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function verificar_usuario_logado(){
  return isset($_SESSION["usuario_logado]");
}

function logar_usuario($email){
  $_SESSION["usuario_logado"] = $email;

}

functio usuario_logado(){
  $_SESSION["usuario_logado"] = $email;
}

function verificar_usuario(){
  if(!verificar_usuario_logado()){
    header()
  }

}

<?php

$conexao = mysqli_connect("127.0.0.1","root","root","projetos");

if(!$conexao){
    
    $erro = mysqli_connect_error();
    
    echo($erro);
    
}
<?php

 $conexao = mysqli_connect("127.0.0.1","root","root","projetos");
  
    $id = 8;
  
    $query = "update contratos set ativo=false where id={$id}";
    
    $resultado = mysqli_query($conexao,$query);
    
    var_dump($resultado);
            

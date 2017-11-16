<?php
function adicionaContrato($conexao,$nome,$versao,$vencimento){
    
    $query = "INSERT into contratos(nome,versao,caminho,vencimento)  VALUES('{$nome}','{$versao}','{$caminho}',{$vencimento})";
    
    $resultado = mysqli_query($conexao,$query);    
        
    return $resultado;  
        
}

function listaContratos($conexao){
    
    $pdfs = array();
    
    $resultado = mysqli_query($conexao, "SELECT * FROM contratos where ativo=true");
    
    while($pdf = mysqli_fetch_assoc($resultado)){
        array_push($pdfs,$pdf);
    }
    return $pdfs;
        
}


function alteraPdf($conexao,$id, $nome, $arquivo, $dataCad,$vencimento,$ativo){
    
    $query = "update contratos set nome='{$nome}',arquivo='{$versao}',dataCad='{$dataCad}',vencimento='{$vencimento}',ativo='{$ativo}' where id={$id}";
    
    return mysqli_query($conexao,$query);
}


function buscaPdf($conexao,$id){
    
    $query = "SELECT * from contratos where id={$id}";
    
    $resultado = mysqli_query($conexao,$query);
    
    return mysqli_fetch_assoc($resultado);
        
}


function inativaContrato($conexao,$id){
    
   $query = "update contratos set ativo=false where id={$id}";
    
    $resultado = mysqli_query($conexao,$query);
    
               
}


<?php
include("conexao.php");
include("cabecalho.php");

//Referencias 
//http://blog.thiagobelem.net/upload-de-arquivos-como-tudo-funciona
//https://www.youtube.com/watch?v=iNm86iordCQ

$cliente['id'];

$vencimento = $_POST['vencimento'];

$nome_arquivo = $_FILES['arquivo']['name'];
$extensao =  strtolower(substr($_FILES['arquivo']['name'], -4));
    
    
    //insert no banco de dados

    $sql_code = "INSERT INTO contratos (nome,arquivo,vencimento,ativo,dataCad) VALUES ('$nome','$nome_arquivo','{$vencimento}',$ativo,NOW())";
      
    mysqli_query($conexao,$sql_code);
                
     $ultimo_id =  mysqli_insert_id($conexao);
      
     // var_dump($sql_code);
    //diretorio do upload
            
     $_UP['pasta'] ='../uploads/cliente'.$ultimo_id.'/';
        
     mkdir($_UP['pasta'],0777);
       
  
      // move da temp para o diretorio uploads 
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_arquivo)){
        
        echo "Arquivo enviado com sucesso";
    
      }else {
        echo "Falha ao enviar o arquivo". msyqli_error();
        
      }
?>
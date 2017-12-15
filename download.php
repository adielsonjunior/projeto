<?php


$barra = "/";
$cliente = $_POST['cliente_id'];
$arquivoNome= $_POST['nome'] ; 
$local = "anexos/cliente";



// Define o tempo máximo de execução em 0 para as conexões lentas
//set_time_limit(10);
// Arqui você faz as validações e/ou pega os dados do banco de dados
  // nome do arquivo que será enviado p/ download
$arquivoLocal =$local.$cliente.$barra.$arquivoNome; // caminho absoluto do arquivo
// Verifica se o arquivo não existe
if (!file_exists($arquivoLocal)) {
    
    var_dump($cliente);
    var_dump($arquivoNome); 
    var_dump($local); 
    var_dump($arquivoLocal);
    
    
    echo "Erro ao encontrar o arquivo arquivo";
// Exiba uma mensagem de erro caso ele não exista
exit;
}
// Aqui você pode aumentar o contador de downloads
// Definimos o novo nome do arquivo

// Configuramos os headers que serão enviados para o browser
header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename="'.$arquivoNome.'"');
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($arquivoNome));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');
// Envia o arquivo para o cliente
readfile($arquivoNome);



    
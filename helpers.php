<?php

function traduz_ativo($ativo){
    if($ativo ==1){
        return 'Sim';
    }
    return 'Não';
}

function tratar_anexo($anexo,$cliente_id) {
$padrao = '/^.+(\.pdf|\.zip|\.docx|\.txt)$/';
$resultado = preg_match($padrao, $anexo['name']);
if (! $resultado) {
return false;
}


move_uploaded_file($anexo['tmp_name'],
"anexos/cliente{$cliente_id}/{$anexo['name']}");
return true;
}

function traduz_data($data){
  if($data == ""  OR $data == "0000-00-00"){
    return "";
  }
    $dados = explode("-",$data);
    if(count($dados) !=3){
      return $data;
    }
    $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $data_exibir;
}



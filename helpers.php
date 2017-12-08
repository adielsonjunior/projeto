<?php

function traduz_ativo($ativo){
    if($ativo ==1){
        return 'Sim';
    }
    return 'Não';
}

function tratar_anexo($anexo,$cliente_id){
  $padrao = '/^.+(\.pdf|\.zip|\.jpg|\.docx|\.doc|\.jpge|\.bmp)$/';
  $resultado = preg_match($padrao, $anexo['name']);
  if(!$resultado){
    return false;
  }

  move_uploaded_file($anexo['tmp_name'],"/uploads/cliente{$cliente_id}/{$anexo['name']}");

  return true;

}

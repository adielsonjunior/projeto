<?php

function traduz_ativo($ativo){
    if($ativo ==1){
        return 'Sim';
    }
    return 'Não';
}

function tratar_anexo($anexo,$cliente_id) {
$padrao = '/^.+(\.pdf|\.zip|\.txt|\.png|\.docx|\.doc|\.jpg|\.jpeg)$/i';
$resultado = preg_match($padrao, $anexo['name']);
if (! $resultado) {
return false;
}

      //Substituir os caracteres especiais
	$original = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
    $substituir = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
	$anexo['name'] = strtr(utf8_decode($anexo['name']), utf8_decode($original), $substituir);

	//Substituir o espaco em branco pelo traco
	$anexo['name'] = str_replace(' ', '_', $anexo['name']);

	//Converter para minusculo
	$anexo['name'] = strtolower($anexo['name']);


  move_uploaded_file($anexo['tmp_name'],
"uploads/cliente{$cliente_id}/{$anexo['name']}");


return true;
}



function tratar_anexo_imovel($anexo,$cliente_id) {
$padrao = '/^.+(\\.png|\.jpg|\.jpeg)$/i';
$resultado = preg_match($padrao, $anexo['name']);
if (! $resultado) {
return false;
}

      //Substituir os caracteres especiais
	$original = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
    $substituir = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
	$anexo['name'] = strtr(utf8_decode($anexo['name']), utf8_decode($original), $substituir);

	//Substituir o espaco em branco pelo traco
	$anexo['name'] = str_replace(' ', '_', $anexo['name']);

	//Converter para minusculo
	$anexo['name'] = strtolower($anexo['name']);


  move_uploaded_file($anexo['tmp_name'],
"uploads/cliente{$cliente_id}/{$anexo['name']}");


echo "enviando arquivo TEMP";

var_dump($anexo['tmp_name']);

echo "enviando arquivo QUE VAI PRA PASTA";

var_dump($anexo['name']);

echo "anexo Pasta";
var_dump($anexo_temp);

echo "anexo temp";
var_dump($anexo_temp);


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

<?php

function insere_imovel($conexao, $nome,$endereco,$tipo,
$area, $banheiros,$descricao, $destaques, $alugado,$ativo,$vagas,
$valor_aluguel,$foto_principal,$cliente_id){

  $query = "INSERT INTO imoveis (nome, endereco, tipo, area,
    banheiros, descricao, destaques, alugado, ativo, vagas, valor_aluguel,
    foto_principal, cliente_id)
  VALUES ('{$nome}', '{$endereco}', '{$tipo}', '{$area}',
    '{$banheiros}', '{$descricao}', '{$destaques}',
    '{$alugado}', '{$ativo}', '{$vagas}', '{$valor_aluguel}', '{$foto_principal}',
     '{$cliente_id}')";


  $resultado = mysqli_query($conexao,$query);

  return $resultado;

}




function gravar_imovel($conexao,$imovel){
  $sqlGravar = "INSERT INTO imoveis
  (nome,endereco,
    tipo,area,
    banheiros,descricao,
    destaques, alugado,
    ativo,vagas,valor_aluguel
    foto_principal,cliente_id)
                VALUES
                (
                  '{$anexo['nome']}',
                  '{$anexo['endereco']}',
                  '{$anexo['tipo']}',
                  '{$anexo['area']}',
                  '{$anexo['banheiros']}',
                  '{$anexo['descricao']}',
                  '{$anexo['destaques']}',
                  '{$anexo['alugado']}',
                  '{$anexo['ativo']}'
                  '{$anexo['vagas']}',
                  '{$anexo['valor_aluguel']}',
                  '{$anexo['foto_principal']}',
                  {$anexo['cliente_id']}


                )";
  mysqli_query($conexao,$sqlGravar);
}

function buscar_imoveis($conexao,$cliente_id){
  $sql = "SELECT * FROM imoveis WHERE cliente_id={$cliente_id}";
  $resultado = mysqli_query($conexao, $sql);

  $imoveis = array();

  while($imovel = mysqli_fetch_assoc($resultado)){
    $imoveis[] = $imovel;
  }
  return $imoveis;
}

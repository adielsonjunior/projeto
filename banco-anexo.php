<?php
function gravar_anexo($conexao,$anexo){
  $sqlGravar = "INSERT INTO contratos(cliente_id, nome, arquivo,vencimento)
                VALUES
                (
                  {$anexo['cliente_id']},
                  '{$anexo['nome']}',
                  '{$anexo['arquivo']}',
                  '{$anexo['vencimento']}'

                )";
  mysqli_query($conexao,$sqlGravar);
}

function buscar_anexos($conexao,$cliente_id){
  $sql = "SELECT * FROM contratos WHERE cliente_id={$cliente_id}";
  $resultado = mysqli_query($conexao, $sql);

  $anexos = array();

  while($anexo = mysqli_fetch_assoc($resultado)){
    $anexos[] = $anexo;
  }
  return $anexos;
}

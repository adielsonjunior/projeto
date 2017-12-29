<?php
require_once("cabecalho.php");
require_once("banco-cliente.php");
require_once("helpers.php");
require_once("logica-usuario.php");
verificar_usuario();

?>

<?php
 $listar_clientes =  array(
    'id' => 0,
    'nome' =>'',
    'cpf'=>'',
    'prazo'=>'',
    'ativo' =>1,
       );
  
     $listar_clientes = listar_todos_clientes($conexao);
require_once("tabela-cliente.php");
?>






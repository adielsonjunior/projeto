<?php
require_once("cabecalho.php");
require_once("logica-usuario.php");
?>


    <h1>Sistema de Gestão de Contratos</h1>
     <br>
     <?php if(usuario_esta_logado()){?>
       <p class="text-success">Você esta logado como <?=usuario_logado()?></p>
        <br>
       <a href="logout.php">Sair</a>
     <?php }else{?>

  <h4>Formulário de Login</h4>

    <form action="login.php" method="post">
    <table class="table">
      <tr>
      </tr>
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email"></td>
      </tr>
      <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha"></td>
      </tr>
      <tr>
        <td><button class="btn btn-primary">Login</button></td>
      </tr>

    </table>
 </form>
<?php } ?>

<?php include("rodape.php");?>

<?php
include("cabecalho.php");
?>
<?php if(isset($_GET["login"]) && $_GET["login"] == true) { ?>
  <p class="alert-success"> Usuário Logado com Sucesso</p>
<?php }?>


  <?php if(isset($_GET["login"]) && $_GET["login"] == false){?>
    <p class="alert-danger"> Usuário ou Senha incorreta</p>
  <?php } ?>
    <h1>Sistema de Gestão de Contratos</h1>
     <br>
     <?php if(isset($_COOKIE["usuario_logado"])){?>
       <p class="text-success"> Você esta logado como
       <?=$_COOKIE["usuario_logado"]?></p>
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

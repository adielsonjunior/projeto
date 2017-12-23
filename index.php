<?php
include("cabecalho.php");
?>

  <h1>Sistema de Gestão de Contratos</h1>
 <br>
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

<?php
include("rodape.php");
?>

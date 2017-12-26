<?php
require_once("logica-usuario.php");
logout();
$_SESSION["success"] = "Logout feito com sucesso";
header("Location:index.php");
die();

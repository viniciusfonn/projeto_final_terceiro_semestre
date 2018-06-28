<?php require_once("_funcoes/funcoes_login_paciente.php");

logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: home.php");
die();

<?php require_once("funcoes_login_admin.php");

logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header("Location: index_admin.php");
die();

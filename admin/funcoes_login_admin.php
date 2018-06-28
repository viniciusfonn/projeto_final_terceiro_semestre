<?php 

function buscaUsuario($conexao, $login2, $senha) { 
    $query = "select * from admin where login='{$login2}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}
function verificaUsuario() {
  if(!usuarioEstaLogado()) {
      $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: index.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}
function logaUsuario($login2) {
    $_SESSION["usuario_logado"] = $login2;
}
function logout() {
    session_destroy();
    session_start();
}





 ?>
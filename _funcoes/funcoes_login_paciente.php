<?php
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
      $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: home.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["usuario_logado"];
}

function logaUsuario($usuario) {
    $_SESSION["usuario_logado"] = $usuario['nome'];
    $_SESSION["usuario_logado_id"] = $usuario['id_usuario'];

}

// buscar paciente
function buscaUsuario($conexao, $login_user, $senha) {
      
    $query = "select * from usuarios where login='$login_user' and senha='$senha'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function logout() {
    session_destroy();
    session_start();
}

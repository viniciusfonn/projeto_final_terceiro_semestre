<?php
session_start();

function usuarioEstaLogado() {
    return isset($_SESSION["medico_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
      $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
     header("Location: home.php");
     die();
  }
}

function usuarioLogado() {
    return $_SESSION["meidico_logado"];
}

function logaUsuario($medico) {
    $_SESSION["medico_logado"] = $medico['nome'];
    $_SESSION["medico_logado_id"] = $medico['id_medico'];

}

function logout() {
    session_destroy();
    session_start();
}


function buscaMedico($conexao, $login_user, $senha) {
      
    $query = "select * from medicos where login='$login_user' and senha='$senha'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

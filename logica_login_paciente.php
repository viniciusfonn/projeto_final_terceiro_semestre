<?php 

require_once('conecta.php');
require_once('_funcoes/funcoes_login_paciente.php');


$login_user=$_POST['login_user'];
$senha=$_POST['senha'];


$usuario=buscaUsuario($conexao,$login_user,$senha);

	if($usuario == null) {
	    $_SESSION["danger"] = "Usuário ou senha inválido.";
	    header("Location: home.php");
}
	else{
		 $_SESSION["success"] = "Usuário logado com sucesso.";
   		 logaUsuario($usuario);
   		 header("Location: home.php");
	}
	die();

 ?>






 
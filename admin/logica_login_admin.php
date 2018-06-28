<?php 

require_once('conecta.php');
require_once('funcoes_login_admin.php');


$login2=$_POST['login'];
$senha=$_POST['senha'];


$usuario=buscausuario($conexao,$login2,$senha);

	if($usuario == null) {
	    $_SESSION["danger"] = "Usuário ou senha inválido.";
	    header("Location: index_admin.php");
}
	else{
		
		 $_SESSION["success"] = "Usuário logado com sucesso.";
   		 logaUsuario($usuario["login2"]);
   		 header("Location: admin.php");
   		 
	}
			


	die();

 ?>






 
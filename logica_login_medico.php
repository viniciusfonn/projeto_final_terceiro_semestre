<?php 
require_once('conecta.php');
require_once('_funcoes/funcoes_login_medico.php');


$login_user=$_POST['login_user'];
$senha=$_POST['senha'];

$medico=buscaMedico($conexao, $login_user, $senha);

if ($medico==NULL) {
	 $_SESSION["danger"] = "Usuário ou senha inválido.";
	 header("Location: home.php");
}else{
	 $_SESSION["success"] = "Usuário logado com sucesso.";
   		 logaUsuario($medico);
   		 header("Location: painel_medico.php");
	}
	die();








 ?>	
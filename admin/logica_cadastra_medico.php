<?php 
require_once('conecta.php');
require_once('funcoes_medico.php');


$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$crm=$_POST['crm'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$id_especialidade=$_POST['id_especialidade'];





$id_medico_return=cadastra_medico($conexao,$nome,$sobrenome,$crm,$login,$senha);
if($id_medico_return!=false){
	$resultado=cadastra_especialidade_medico($conexao,$id_medico_return,$id_especialidade);
	echo "cadastrado com sucesso";
	header( "Refresh:2; url=cadastro-medico.php");

	}
else{
	echo "erro";
}



 ?>
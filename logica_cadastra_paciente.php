<?php 
require_once('_funcoes/funcoes_paciente.php');

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$dt_nasc=$_POST['dt_nasc'];
$rg=$_POST['rg'];
$sexo=$_POST['sexo'];
$user_login=$_POST['user_login'];
$senha=$_POST['senha'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$nr_telefone=$_POST['nr_telefone'];
$tipo=$_POST['tipo'];
$cep=$_POST['cep'];

 if ($nome==NULL or $sobrenome==NULL or $dt_nasc==NULL or $rg==NULL or $user_login==NULL or $senha==NULL or $cidade==NULL or $estado==NULL or $rua==NULL or $numero==NULL or $bairro==NULL or $nr_telefone==NULL ) {
 	echo "Preencha todos os campos";
	header( "Refresh:2; url=cadastro_paciente.php"); 
	die();
 }

	$id_usuario_return=cadastra_paciente($conexao,$nome,$sobrenome,$dt_nasc,$rg,$sexo,$user_login,$senha);
	
	if($id_usuario_return!=false){
		echo "<script>window.alert('Cadastrado com sucesso');</script>";
		header( "Refresh:1; url=home.php");
		cadastra_paciente_endereco($conexao,$id_usuario_return,$cidade,$estado,$rua,$numero,$complemento,$bairro,$cep);
		cadastra_paciente_telefone($conexao,$id_usuario_return,$nr_telefone,$tipo);
	}

 ?>
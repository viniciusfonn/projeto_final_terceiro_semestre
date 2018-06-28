<?php 

$pagina='logica_atualiza_paciente.php'; //aqui colocariamos o nome da pagina.
if(basename($_SERVER["PHP_SELF"])=='$pagina'){
die("<script>alert('Sem permição de acesso !')</script>\n<script>window.location=('home.php')</script>");
}

require_once('_funcoes/funcoes_login_paciente.php');
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



verificausuario();



	$id_usuario_return=atualiza_paciente($conexao,$id_usuario,$nome,$sobrenome,$dt_nasc,$rg,$sexo,$user_login,$senha);

	if($id_usuario_return!=false){
		atualiza_paciente_endereco($conexao,$id_usuario_return,$cidade,$estado,$rua,$numero,$complemento,$bairro);
		atualiza_paciente_telefone($conexao,$id_usuario_return,$nr_telefone,$tipo);

		echo "<center><h1>Cadastro atualizado com sucesso.</h1></center>";
		// essa porra serve pra pagina voltar pra selec.php DEPOIS DE 2 SEGUNDOES
		
		header("Refresh:2; url=index.php");
	}	
	else{
	echo "Erro";


	}

 ?>
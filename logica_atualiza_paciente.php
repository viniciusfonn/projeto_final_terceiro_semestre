<?php 

$pagina='edita-perfil.php'; //aqui colocariamos o nome da pagina.
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
$login=$_POST['user_login'];
$senha=$_POST['senha'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$bairro=$_POST['bairro'];
$nr_telefone=$_POST['nr_telefone'];
$cep=$_POST['cep'];
$id_usuario=$_POST['id_usuario'];





verificausuario();



	$id_usuario_return=atualiza_paciente($conexao,$id_usuario,$nome,$sobrenome,$dt_nasc,$rg,$login,$senha);
	

		atualiza_paciente_endereco($conexao,$id_usuario,$cidade,$estado,$rua,$numero,$complemento,$bairro,$cep);
		atualiza_paciente_telefone($conexao,$id_usuario,$nr_telefone);

		echo "<center><h1>Cadastro atualizado com sucesso.</h1></center>";
		// essa porra serve pra pagina voltar pra selec.php DEPOIS DE 2 SEGUNDOES
		
		header("Refresh:2; url=home.php");

 ?>
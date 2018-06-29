<?php 
require_once("header.php");
require_once("nav.php");
require_once("_funcoes/funcoes_consulta.php");
require_once("_funcoes/funcoes_medico.php");

$id_usuario=$_SESSION["usuario_logado_id"];


$consultas=consultas_marcadas($conexao,$id_usuario);






echo "minhas consultas";
echo '<br>';




foreach ($consultas as $consulta) {
	$id_medico=$consulta['id_medico'];
	$medico=busca_medico($conexao,$id_medico);
	echo '<br>';
	
	echo $consulta['data'];
	echo '<br>';
	echo $consulta['hora'];
	echo '<br>';
	echo $medico['nome'];
	echo '<br>';




}

 ?>
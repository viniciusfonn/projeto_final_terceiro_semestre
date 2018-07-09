<?php 
require_once('_funcoes/funcoes_consulta.php');
require_once('conecta.php');

$hora=$_POST['hora'];
$data=$_POST['data'];
$id_usuario=$_POST['id_usuario'];
$id_medico=$_POST['id_medico'];




if(desmarcar_consulta($conexao,$hora,$data,$id_usuario,$id_medico)){
	echo "<script>window.alert('Desmarcado com sucesso');</script>";
	header( "Refresh:1; url=painel_medico.php");
	}



 ?>
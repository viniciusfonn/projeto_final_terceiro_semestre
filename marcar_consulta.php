<?php 
require_once("header.php");
require_once("nav.php");
require_once("_funcoes/funcoes_consulta.php");




$horario=$_POST['horario'];
$data=$_POST['data'];
$id_medico=$_POST['id_medico'];


$id_usuario=$_SESSION["usuario_logado_id"];



 if(marcar_consulta($conexao,$horario,$data,$id_medico,$id_usuario)){
 	echo "SUCESSO";
 }
 else{
 	echo "FRACASSO";
 }



 ?>
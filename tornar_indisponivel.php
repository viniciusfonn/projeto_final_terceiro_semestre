<?php 
require_once("header.php");
require_once("_funcoes/funcoes_horarios.php");





$horario=$_POST['id_horario'];
$data=$_POST['data'];
$id_medico=$_POST['id_medico'];





if(tornar_indisponivel($conexao,$horario,$data,$id_medico)){
	echo "<center><h1>Horario  marcado como indisponivel</h1></center>";
		
		header( "Refresh:2; url=horarios_indisponiveis_medico.php");
}






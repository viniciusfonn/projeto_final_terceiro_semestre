<?php 



function mostra_horarios($conexao,$teste,$id_medico){
	$sql="SELECT * FROM horarios WHERE horarios.hora NOT in (SELECT consulta_horario.hora FROM consulta_horario where data = '$teste' AND id_medico='$id_medico') AND horarios.hora NOT IN(SELECT horarios_indisponiveis.hora FROM horarios_indisponiveis where data = '$teste');";
	$horarios=array();
	$resultado=mysqli_query($conexao,$sql);

	while($horario = mysqli_fetch_assoc($resultado)) {
        array_push($horarios, $horario);
    }
    return $horarios;
}

function retorna_data($conexao){
	$sql="SELECT CURRENT_TIME();";
	return mysqli_query($conexao,$sql);
}
function soma_dia($conexao,$i){
	$sql="SELECT hora;";
}


function obtemDia($teste){
date_default_timezone_set('America/Sao_Paulo');
	
$diaingles = date('l', strtotime($teste));
	

	 if($diaingles=='Thursday'){
	 	return 'Quinta';
	 }
	 if($diaingles=='Wednesday'){
	 	return 'Quarta-feira';
	 }
	  if($diaingles=='Friday'){
	 	return 'Sexta-feira';
	 }
	  if($diaingles=='Saturday'){
	 	return 'Sabado';
	 }
	  if($diaingles=='Sunday'){
	 	return 'Domingo';
	 }
	 if($diaingles=='Monday'){
	 	return 'Segunda-Feira';
	 }
	  if($diaingles=='Tuesday'){
	 	return 'Terça-Feira';
	 }

}

function  tornar_indisponivel($conexao,$horario,$data,$id_medico){


$sql="INSERT INTO horarios_indisponiveis (data,hora,id_medico) VALUES ('$data','$horario','$id_medico');";
return mysqli_query($conexao,$sql);

}

 ?>

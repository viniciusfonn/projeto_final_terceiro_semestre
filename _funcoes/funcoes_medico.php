<?php 




function buscaConsultas($conexao,$id_medico){
// date_default_timezone_set('America/Sao_Paulo');
// 	$data = date('Y-m-d');
	$sql="SELECT * FROM consulta_horario where id_medico=$id_medico AND data>=current_time;";
	$consultas=array();
	$resultado=mysqli_query($conexao,$sql);

	while($consulta = mysqli_fetch_assoc($resultado)) {
        array_push($consultas, $consulta);
    }
    return $consultas;
}






 ?>
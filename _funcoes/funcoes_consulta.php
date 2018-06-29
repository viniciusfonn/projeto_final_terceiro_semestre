<?php 


function marcar_consulta($conexao,$horario,$data,$id_medico,$id_usuario){
	$sql="INSERT INTO  consulta_horario (data,hora,id_medico,id_usuario) VALUES ('$data','$horario','$id_medico','$id_usuario');";
	return mysqli_query($conexao,$sql);
}



function consultas_marcadas($conexao,$id_usuario){
	$sql="SELECT * FROM consulta_horario WHERE id_usuario='$id_usuario';";
	$consultas=array();
	$resultado=mysqli_query($conexao,$sql);

	while($consulta = mysqli_fetch_assoc($resultado)) {
        array_push($consultas, $consulta);
    }
    return $consultas;
}
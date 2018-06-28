<?php 

require_once('conecta.php');


function cadastra_medico($conexao,$nome,$sobrenome,$crm,$login,$senha){

	$sql="INSERT INTO medicos (nome,sobrenome,crm,login,senha) VALUES ('$nome','$sobrenome','$crm','$login','$senha')";	

	 $resultado=mysqli_query($conexao,$sql);
	 $id_medico_return=mysqli_insert_id ($conexao);
	 if($resultado){
	 	return $id_medico_return;
	 }else{
	 	return false;
	 }
	 
}

function cadastra_especialidade_medico($conexao,$id_medico_return,$id_especialidade){
	$sql="INSERT INTO medicos_especialidades (id_medico,id_especialidade) VALUES ('$id_medico_return','$id_especialidade');";

	return mysqli_query($conexao,$sql);

}


function mostra_medico($conexao){
	$sql="SELECT nome,sobrenome, especialidades.descricao as especialidade,crm from medicos join medicos_especialidades using(id_medico) join especialidades using(id_especialidade);";
	$medicos=array();
	$resultado=mysqli_query($conexao,$sql);

	while($medico = mysqli_fetch_assoc($resultado)) {
        array_push($medicos, $medico);
    }
    return $medicos;
}



 ?>
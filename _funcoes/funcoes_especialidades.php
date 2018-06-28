<?php
require_once('conecta.php');

function listaEspecialidades($conexao) {
    $especialidades = array();
    $query = "select * from especialidades";
    $resultado = mysqli_query($conexao, $query);
    while($especialidade = mysqli_fetch_assoc($resultado)) {
        array_push($especialidades, $especialidade);
    }
    return $especialidades;
}


function cadastra_especialidade($conexao,$especialidade){
	$sql="INSERT INTO especialidades (descricao) VALUES ('$especialidade');";
	return mysqli_query($conexao,$sql);
}



function busca_especialidade($conexao,$id_especialidade){
	$sql="SELECT descricao FROM especialidades WHERE id_especialidade=$id_especialidade;";
	
	
	$resultado= mysqli_query($conexao,$sql);
	$nome_especialidade=mysqli_fetch_assoc($resultado);
	

	return $nome_especialidade;
}



// cpa essa funcao sai dqui
function busca_medico_especial($conexao,$id_especialidade){
	$sql="SELECT nome,sobrenome,id_medico FROM medicos JOIN medicos_especialidades USING (id_medico)  WHERE id_especialidade='$id_especialidade';";
	$medicos_especial=array();
	$resultado=mysqli_query($conexao,$sql);

	while($medico = mysqli_fetch_assoc($resultado)) {
        array_push($medicos_especial, $medico);
    }
    return $medicos_especial;
}

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

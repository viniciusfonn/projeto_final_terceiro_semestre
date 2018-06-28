<?php 

require_once("conecta.php");

// inicio funcoes cadastro_paciente

function cadastra_paciente($conexao,$nome,$sobrenome,$dt_nasc,$rg,$sexo,$login,$senha){
	$sql="INSERT INTO usuarios (nome,sobrenome,dt_nasc,rg,sexo,login,senha) VALUES ('$nome','$sobrenome','$dt_nasc','$rg','$sexo','$login','$senha');";
	 $resultado=mysqli_query($conexao,$sql);
	 $id_usuario_return=mysqli_insert_id ($conexao);
	 if($resultado)
	 {
	 	
	 	return $id_usuario_return;

	 }

	 return false;
}


function cadastra_paciente_endereco($conexao,$id_usuario_return,$cidade,$estado,$rua,$numero,$complemento,$bairro){
	$sql="INSERT INTO enderecos_pacientes (id_usuario,cidade,estado,rua,numero,complemento,bairro) VALUES ('$id_usuario_return','$cidade','$estado','$rua','$numero','$complemento','$bairro');";
	return mysqli_query($conexao,$sql);

}

function cadastra_paciente_telefone($conexao,$id_usuario_return,$nr_telefone,$tipo){
	$sql="INSERT INTO usuario_tel (id_usuario,num_telefone,tipo) VALUES ('$id_usuario_return','$nr_telefone','$tipo');";
	return mysqli_query($conexao,$sql);
}


// termina funcoes de cadastro_paciente









 // inicia funcoes de atualizar paciente


function busca_paciente($conexao,$id_usuario){
	$query="select * from usuarios where id_usuario='$id_usuario';";
	$resultado=mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
function busca_paciente_endereco($conexao,$id_usuario){
	$query="select * from enderecos_pacientes where id_usuario='$id_usuario';";
	$resultado=mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}
function busca_paciente_telefone($conexao,$id_usuario){
	$query="select * from usuario_tel where id_usuario='$id_usuario';";
	$resultado=mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}

 function atualiza_paciente($conexao,$id_usuario,$nome,$sobrenome,$dt_nasc,$rg,$sexo,$login,$senha){
 	$sql="UPDATE usuarios set nome='$nome', sobrenome='$sobrenome', dt_nasc='$dt_nasc', rg='$rg',sexo='$sexo',login='$login',senha='$senha' where id_usuario='$id_usuario' returning id_usuario;";
 	 $resultado=mysqli_query($conexao,$sql);
	 if($resultado)
	 {
	 	$registro=mysqli_fetch_array($resultado);
	 	$id_usuario_return=$registro['id_usuario'];
	 	return $id_usuario_return;
	 }

	 return false;
 }

 function atualiza_paciente_endereco($conexao,$id_usuario_return,$cidade,$estado,$rua,$numero,$complemento,$bairro){
 	$sql="UPDATE enderecos_pacientes set cidade='$cidade', estado='$estado',rua='$rua',numero='$numero', complemento='$complemento',bairro='$bairro' where id_usuario=;";
 	return mysqli_query($conexao,$sql);
 }

function atualiza_paciente_telefone($conexao,$id_usuario_return,$nr_telefone,$tipo){
	$sql="UPDATE usuario_tel set nr_telefone='$nr_telefone',tipo='$tipo' ;";
	return mysqli_query($conexao,$sql);
}


 ?>
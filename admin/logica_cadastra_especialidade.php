<?php 


require_once('funcoes_especialidades.php');


$especialidade=$_POST['especialidade'];



if(cadastra_especialidade($conexao,$especialidade)){
	echo "cadastrado com sucesso";
	header( "Refresh:2; url=cadastro-medico.php");
}
else{
	echo "deu ruim";
}





 ?>
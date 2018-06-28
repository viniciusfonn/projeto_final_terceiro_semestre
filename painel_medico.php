<?php 

require_once('header.php');
require_once('_funcoes/funcoes_login_medico.php');
require_once('_funcoes/funcoes_medico.php');
require_once('conecta.php');



echo $_SESSION["medico_logado"];
$id_medico=$_SESSION["medico_logado_id"];

echo "<br>";

echo "Consultas marcadas";
echo "<br>";
$consultas=buscaConsultas($conexao,$id_medico);

foreach ($consultas as $consulta) {
	echo $consulta['data'];
	echo "<br>";
	echo $consulta['hora'];

}


 ?>

 <h2><a href="horarios_indisponiveis_medico.php">definir horarios indisponiveis</a></h2>
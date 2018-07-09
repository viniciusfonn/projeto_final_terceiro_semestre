<?php 

require_once('_funcoes/funcoes_login_medico.php');
require_once('_funcoes/funcoes_medico.php');

verificaUsuario();

$id_medico=$_SESSION["medico_logado_id"];

$horarios=mostra_horarios($conexao,$teste,$id_medico);





 ?>
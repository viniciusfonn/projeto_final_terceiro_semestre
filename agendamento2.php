<?php 
require_once("header.php");
require_once("nav.php");
require_once("_funcoes/funcoes_medico.php");



$id=$_POST['id_horario'];
$data=$_POST['data'];
$id_medico=$_POST['id_medico'];


$medico=busca_medico($conexao,$id_medico);


echo "seu horario de consulta é:".$id."";
echo '<br>';
echo  "Na data ".$data."";
echo '<br>';
echo "Com o médico ".$medico['nome']."";
echo '<br>';



echo $_SESSION["usuario_logado_id"];
echo '<br>';



echo "deseja confirmar a consulta?";
 ?>
 <form action="marcar_consulta.php" method="POST">
 	<input type="hidden" name="horario" value="<?=$id?>">
 	<input type="hidden" name="data" value="<?=$data?>">
 	<input type="hidden" name="id_medico" value="<?=$id_medico?>">
 	<button type="submit">Marcar</button>
 </form>
<?php 
require_once("header.php");

require_once("nav.php");



$id=$_POST['id_horario'];
$data=$_POST['data'];
$id_medico=$_POST['id_medico'];




echo $id;
echo '<br>';
echo $data;
echo '<br>';
echo $id_medico;
echo '<br>';



echo $_SESSION["usuario_logado_id"];


 ?>
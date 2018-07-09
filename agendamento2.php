<?php

require_once('conecta.php');
require_once("_funcoes/funcoes_medico.php");

$id=$_POST['id_horario'];
$data=$_POST['data'];
$id_medico=$_POST['id_medico'];
$medico=busca_medico($conexao,$id_medico);





?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require_once('header.php'); ?>


<body>
	<?php require_once("nav.php"); ?>

	<div class="container" style="display:flex;justify-content:center;align-items:center; min-height: 400px;">
		<center><h4>Você escolheu uma consulta para o Dia: <?=$data?>  Horário: <?=$id?> com o médico:<?=$medico['nome']?></h4>
			<h5>Tem certeza que deseja agendar essa consulta?</h5>
			
			<div class="btn-group">
				<form action="marcar_consulta.php" method="POST">
						<input type="hidden" name="horario" value="<?=$id?>">
 						<input type="hidden" name="data" value="<?=$data?>">
 						<input type="hidden" name="id_medico" value="<?=$id_medico?>">
					<button type="submit" class="btn btn-success">Sim</button>

				</form>
				<a href="agendamento.php" class="btn btn-danger">Não</a>
			</div>
		</center>
	</div>






	<?php require_once('footer.php') ?>

</body>
</html>


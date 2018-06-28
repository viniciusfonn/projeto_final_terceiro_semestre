<!DOCTYPE html>
<html>
<?php require_once("header.php");

// teste
require_once('_funcoes/funcoes_horarios.php');
// fim teste
	
$id_especialidade=$_POST['id_especialidade'];
$medicos_especial=NULL;
$medicos_especial=busca_medico_especial($conexao,$id_especialidade);
$nome_especialidade=busca_especialidade($conexao,$id_especialidade);
 ?>
<body>
	
	<?php require_once("nav.php"); ?>
	<h1> Você esta buscando por médicos: <?=$nome_especialidade['descricao']?></h1>
	<?php 



	if ($medicos_especial!=NULL) {
	
	foreach ($medicos_especial as $medico) {?>
		
		<p>Médico:<?=$medico['nome']?>&nbsp<?=$medico['sobrenome']?></p>
		<br>
		<?php


		for ($i=0; $i <8 ; $i++) { 
			 $teste=date('Y-m-d', strtotime("+$i days"));
			 $data=obtemDia($teste);
	 		 echo $teste;
			 
			 echo '<br>';

			 echo $data;
			 echo '<br>';
			 echo '<br>';
			 echo '<br>';
			 
			 $horarios=mostra_horarios($conexao,$teste,$medico['id_medico']);

			 if ($data!='Domingo' && $data!='Sabado') {
			 	
			 
			foreach ($horarios as $horario) { ?>
				<p><?=$horario['hora']?></p>
				<form action="agendamento2.php" method="POST">
					<input type="hidden" name="data" value="<?=$teste?>">
					<input type="hidden" name="id_medico" value="<?=$medico['id_medico']?>">		
					<input type="hidden" name="id_horario" value="<?=$horario['hora']?>">
				<button type="submit">Marcar</button>
				</form>
			<br>


			<?php 
					}

				}
						
		} 	

	  } 
	} else{
		echo "Nenhum médico cadastrado nesta categoria";
	} ?>

	 


		
	

	<?php require_once("footer.php"); ?>
	
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>



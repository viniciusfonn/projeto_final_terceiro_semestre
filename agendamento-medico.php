<?php 

require_once('header.php');
require_once('_funcoes/funcoes_login_medico.php');
require_once('_funcoes/funcoes_medico.php');
require_once('_funcoes/funcoes_horarios.php');

require_once('conecta.php');

$_SESSION['medico_logado'];
$id_medico=$_SESSION["medico_logado_id"];
$consultas=buscaConsultas($conexao,$id_medico);
$medico=busca_medico($conexao,$id_medico);

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php require_once("header.php"); ?>
<body>
	<?php require_once("nav-medico.php"); ?>
	<br><br>
	<center><h2><a href="#">Marcar horários indisponíveis na semana:</a></h2></center><br>
	<div class="borda-medico container">
		<div class="imagem-nome">
			<img src="img/default-user-image.png" width="100px" height="100px" alt="">	
			<h5 style="margin: 0 5px;"><?=$medico['nome']?>&nbsp<?=$medico['sobrenome']?></h5>
		</div>
		<br>

		<?php

		for ($i=0; $i <=6 ; $i++) {
			?>
			<div class="horarios">
				<?php
				$teste2=date('Y-m-d', strtotime("+$i days"));
				$teste=date('d-m',strtotime("+$i days"));
				$data=obtemDia($teste2);
				echo "<h5>".$data."</h5><br>";
				echo "<h5>".$teste."</h5>";
				$horarios=mostra_horarios($conexao,$teste2,$id_medico);

				if ($data!='Domingo' && $data!='Sabado') { 

					foreach ($horarios as $horario) {
						?>
						<form action="tornar_indisponivel.php" method="POST" id="formulario">
							<input type="hidden" name="data" value="<?=$teste2?>">
							<input type="hidden" name="id_medico" value="<?=$medico['id_medico']?>">

							<input type="hidden" name="id_horario" value="<?=$horario['hora']?>">
							<button type="submit" class="btn btn-light"><?=$horario['hora']?></button><br><br>
					</form>	

						<?php } ?>
					<button class="btn btn-danger" style="margin-bottom: 30px;">Feriado</button>
					<?php 
				}
				
				?>
			</div>

			<?php 		
		}
		?>

	</div>
	<?php require_once("footer.php"); ?>

</body>
</html>
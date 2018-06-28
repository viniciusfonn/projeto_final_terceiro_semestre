<?php 

require_once('_funcoes/funcoes_login_medico.php');
require_once('_funcoes/funcoes_medico.php');
require_once('_funcoes/funcoes_horarios.php');
require_once('header.php');
verificaUsuario();

$id_medico=$_SESSION["medico_logado_id"];






for ($i=0; $i <8 ; $i++) { 
			 $teste=date('Y-m-d', strtotime("+$i days"));
			 $data=obtemDia($teste);
	 		 echo $teste;
			 
			 echo '<br>';

			 echo $data;
			 echo '<br>';
			 echo '<br>';
			 echo '<br>';
			 
			 $horarios=mostra_horarios($conexao,$teste,$id_medico);

			 if ($data!='Domingo' && $data!='Sabado') {
			 	
			 
			foreach ($horarios as $horario) { ?>
				<p><?=$horario['hora']?></p>
				<form action="tornar_indisponivel.php" method="POST">
					<input type="hidden" name="data" value="<?=$teste?>">
					<input type="hidden" name="id_medico" value="<?=$id_medico?>">		
					<input type="hidden" name="id_horario" value="<?=$horario['hora']?>">
				<button type="submit">Tornar Indisponivel</button>
				</form>
			<br>


			<?php 
					}  // do foreach

				}   //do segundo for

		} // do primeiro for		
						
		 ?>


<?php 

require_once('conecta.php');
require_once('_funcoes/funcoes_horarios.php');
date_default_timezone_set('America/Sao_Paulo');









$data = date('Y-m-d');


for ($i=0; $i <29 ; $i++) { 
	
	 $teste=date('Y-m-d', strtotime("+$i days"));
	 echo $teste;
	 

	echo '<br>';

	$horarios=mostra_horarios($conexao,$teste);

	foreach ($horarios as $horario) { ?>
			<p><?=$horario['hora']?></p>
			<form action="agendamento2.php" method="POST">
				<input type="hidden" name="data" value="<?=$teste?>">
				<input type="hidden" name="id_horario" value="<?=$horario['hora']?>">
			<button type="submit">Marcar</button>
		</form>
		<br>


<?php 	}
	
 } ?>










 
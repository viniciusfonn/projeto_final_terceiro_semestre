<?php 
	require_once("header.php"); 
	require_once('_funcoes/funcoes_paciente.php');
	require_once('_funcoes/funcoes_login_paciente.php');
	require_once("conecta.php");
	require_once('_funcoes/funcoes_consulta.php');


	$id_usuario=$_SESSION["usuario_logado_id"];
	$consultas=consultas_marcadas($conexao,$id_usuario);

?>

<!DOCTYPE html>
<html>

<body>
	
	<?php require_once("nav.php"); ?>
		<center><h2 style="margin-top: 30px;">Painel do paciente - Minha consulta</h2></center><br><br>
		<center><h2><a href="#">Consultas agendadas:</h2></a></center><br><br>
	<div class="container" style="display:flex;justify-content:center;align-items:center; height: auto; padding-bottom: 200px;">
		

		<table class="table" border="2" style="width: 500px">
			<thead>
				<tr>

					<th scope="col">Data</th>
					<th scope="col">Horário</th>
					<th scope="col">Desmarcar</th>
				</tr>
			</thead>
			<tbody>
			
				
						<?php 
							foreach($consultas as $consulta){ ?> 
						<form action="desmarca_consulta.php" method="POST">		
							<tr>
								<td><?=$consulta['data']?></td>
								<td><?=$consulta['hora']?></td>
								<input type="hidden" name="data" value="<?=$consulta['data']?>">
							 	<input type="hidden" name="hora" value="<?=$consulta['hora']?>">
							 	<input type="hidden" name="id_medico" value="<?=$consulta['id_medico']?>">
							 	<input type="hidden" name="id_usuario" value="<?=$consulta['id_usuario']?>">
								<td><button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#exampleModal">Confirmar</button></td>
							</tr>
							<?php } ?> 
						</form>	

						</tbody>
					</table>


				</div>
		
		
	
	
	<?php require_once("footer.php"); ?>
	
	

</body>
</html>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>



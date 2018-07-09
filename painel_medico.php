<?php 

require_once('header.php');
require_once('_funcoes/funcoes_login_medico.php');
require_once('_funcoes/funcoes_medico.php');
require_once('conecta.php');

$_SESSION['medico_logado'];
$id_medico=$_SESSION["medico_logado_id"];
$consultas=buscaConsultasAgendadas($conexao,$id_medico);

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php require_once("header.php"); ?>

<body>
	<?php require_once("nav-medico.php"); ?>
	<center><h2 style="margin-top: 30px;">Painel do médico - Minha consulta</h2></center><br><br>
	<center><h2><a href="#">Consultas agendadas:</h2></a></center><br><br>
	<div class="container" style="display:flex;justify-content:center;align-items:center; height: auto; padding-bottom: 200px; min-height: 415px;">
		

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

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-cm">
						<div class="modal-header">
							<h5>Tem certeza que deseja desmarcar essa consulta?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="desmarcar_consulta.php" method="POST" name="formulario">
								
								<div class="botao-registro-cm">
									<button type="submit" class="btn btn-success">Sim</button>
							</form>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
								</div>
						</div>

						</div>

					</div>
				</div>
			</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

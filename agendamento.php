<!DOCTYPE html>
<html>
<?php require_once("header.php");

// teste
require_once('_funcoes/funcoes_horarios.php');
// fim teste
date_default_timezone_set('America/Sao_Paulo');

$id_especialidade=$_POST['id_especialidade'];
$medicos_especial=NULL;
$medicos_especial=busca_medico_especial($conexao,$id_especialidade);
$nome_especialidade=busca_especialidade($conexao,$id_especialidade);
?>
<body>
	
	<?php require_once("nav.php"); ?>
	<div class="container-fluid">
		
		<?php 



		if ($medicos_especial!=NULL) { 

			?>
			<h2 class="text-center titulo"> Você está buscando por: <?=$nome_especialidade['descricao']?></h2>
			
				<div class="row" style="display:flex;justify-content:center;align-items:center;">
					<div class="col-md-6">
						<form action="agendamento.php" method="POST">
							<select class="custom-select custom-select-lg sm-3" name="id_especialidade">
								<option selected>Escolha a especialidade</option>
								<?php foreach ($especialidades as $especialidade) { ?>
									<option value="<?=$especialidade['id_especialidade']?>"> <?=$especialidade['descricao']?></option>		
								<?php } ?>
							</select>

							<br><br>
							<button class="btn btn-primary">Pesquisar</button><br><br>
						</form>
					</div>
				</div>
			

			<?php

			foreach ($medicos_especial as $medico) {
				?>
				<div class="borda-medico container">
					<div class="imagem-nome">
						<img src="admin/imagens/<?=$medico['perfil']?>" width="100px" height="100px" alt="" style="border-radius: 50px; margin-right: 10px">	
						<h5 style="margin: 0 5px;"><?=$medico['nome']?>&nbsp<?=$medico['sobrenome']?></h5>
					</div>
					<br>

					<?php

					for ($i=0; $i <=6 ; $i++) { ?>

						<div class="horarios">
							<?php
							$teste2=date('Y-m-d', strtotime("+$i days"));
							$teste=date('d-m',strtotime("+$i days"));
							$data=obtemDia($teste2);
							echo "<h5>".$data."</h5><br>";
							echo "<h5>".$teste."</h5>";


							$horarios=mostra_horarios($conexao,$teste2,$medico['id_medico']);

							if ($data!='Domingo' && $data!='Sabado') { 

								foreach ($horarios as $horario) { ?>
									<form action="agendamento2.php" method="POST" id="formulario">
										<input type="hidden" name="data" value="<?=$teste2?>">
										<input type="hidden" name="id_medico" value="<?=$medico['id_medico']?>">
										<input type="hidden" name="id_horario" value="<?=$horario['hora']?>">
										<?php 

										if(usuarioEstaLogado()){
											?>
											
											<button type="submit" class="btn btn-light"><?=$horario['hora']?></button><br><br>
											<?php
										} else {
											?>
											<input type="button" class="btn btn-light botao-agend" value="<?php echo $horario['hora'];?>" data-toggle="modal" data-target="#modal"><br><br>	
										<?php } ?>


									</form>



									<?php 
								}

							}
							?>
						</div>
						<?php 		
					}
					?>

				</div>
				<?php
			} 
		} else{ ?>

			<h2 class="text-center titulo">Não há médicos com essa especialidade no momento</h2>
			<div class="row" style="display:flex;justify-content:center;align-items:center;">
					<div class="col-md-6">
						<form action="agendamento.php" method="POST">
							<select class="custom-select custom-select-lg sm-3" name="id_especialidade">
								<option selected>Escolha a especialidade</option>
								<?php foreach ($especialidades as $especialidade) { ?>
									<option value="<?=$especialidade['id_especialidade']?>"> <?=$especialidade['descricao']?></option>		
								<?php } ?>
							</select>

							<br><br>
							<button class="btn btn-primary">Pesquisar</button><br><br>
						</form>
					</div>
				</div>
			
		<?php } ?>

	</div>
	<?php 
	require_once("footer.php"); 
	?>



</body>
</html>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-cm">
						<div class="modal-header">
							<h5 class="modal-title btn-login-mc" id="exampleModalLabel">Login</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="logica_login_paciente.php" method="POST" name="formulario">
								<div class="form-group">
									<label for="nome">Email:</label>
									<input type="email" class="form-control" id="email" aria-describedby="login" placeholder="Digite seu email" name="login_user">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Senha:</label>
									<input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
								</div>
								<div class="botao-registro-cm">
									<button type="button" class="btn btn-primary" onClick="mudarAction()">Médico</button>
									<button type="submit" class="btn btn-success">Paciente</button>
									<div class="registro-cm"><a href="cadastro_paciente.php">Ainda não tenho cadastro</a></div>
								</div>
							</form>   
						</div>

					</div>
				</div>
			</div>






<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/pisca.js"></script>
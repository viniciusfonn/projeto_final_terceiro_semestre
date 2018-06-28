<!DOCTYPE html>
<html>
<?php require_once("header.php"); ?>
<body>
	<div class="bg">
		<?php require_once("nav.php"); ?>
		<!-------------- CONTEÚDO PRINCIPAL DA PÁGINA --------------->
		<main class="conteudo">
			
			<!------------LOGO E TEXTO CENTRALIZADO------------------>
			<div>
				<center><img src="img/logo_novo.png" alt="logo" width="140px"></center>	
			</div>
			<div class="frase">
				<center><p class="pisca">Agende suas consultas com muito mais facilidade!</p></center>
				<div class="botao-main">
					<center><a href="cadastro_paciente.php"><button class="btn btn-primary">Cadastre-se Agora</button></a></center>
				</div>	
			</div>
		</main>

		
	</div>
	
	<!-- SEÇÃO DE ESCOLHA POR ESPECIALIDADE -->
	<section>
		<div class="select-mc">
			<div class="texto-busca">
				<center><p class="">Busca fácil: encontre seu médico pela especialidade</p></center>
			</div>
			<center>
				<div class="container">
					<form action="agendamento.php" method="POST">
					<select class="custom-select custom-select-lg mb-3" name="id_especialidade">
						<option selected>Escolha a especialidade</option>
						<?php foreach ($especialidades as $especialidade) { ?>
						<option value="<?=$especialidade['id_especialidade']?>"> <?=$especialidade['descricao']?></option>		
						<?php } ?>
					</select>
					<center>
						
							<button class="btn btn-primary">Pesquisar</button>
					</form>
					</center>	
				</div>
			</center>
		</div>

	</section>	

	<!-- SEÇÃO COM ÍCONES E TEXTO -->

	<section class="secao-icones">
		<div class="d-flex justify-content-between container text-white" style="text-align: center;">
			<div class="icon-1">
				<img src="img/icon-medico.png" width="100px">
				<div class="icon-text">
					<p class="linha">Confiança</p>
					<p>Encontre os melhores médicos<center><p>da sua cidade</p></center></p>
				</div>
			</div>

			<div class="icon-2">
				<img src="img/icon-2.png" width="100px">
				<div class="icon-text">
					<p class="linha">Qualidade</p>
					<p>Receba um tratamento<center><p>diferenciado</p></center></p>
				</div>
			</div>

			<div class="icon-3">
				<img src="img/icon-3.png" width="100px">
				<div class="icon-text">
					<p class="linha">Comodidade</p>	
					<p>Agende de maneira <center><p>fácil e rápida</p></center></p>
				</div>
			</div>
		</div>
	</section>		

	<?php require_once("footer.php"); ?>
	
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/pisca.js"></script>

</body>
</html>



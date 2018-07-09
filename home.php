<!DOCTYPE html>
<html>
<?php include("header.php"); ?>
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
				<center>
			<div class="container">
				<form action="agendamento.php" method="POST">
					<select class="custom-select custom-select-lg mb-3" id="espec" name="id_especialidade">
						<option selected>Escolha a especialidade</option>
						<?php foreach ($especialidades as $especialidade) { ?>
							<option value="<?=$especialidade['id_especialidade']?>"> <?=$especialidade['descricao']?></option>		
						<?php } ?>
					</select>
					<center>
						
						<center><button class="btn btn-primary">Pesquisar</button></center>
					</form>
				</center>	
				
			</div>
		</main>

		
	</div>
	
	<?php
		include("footer.php"); 
	?>
	
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/pisca.js"></script>

</body>
</html>



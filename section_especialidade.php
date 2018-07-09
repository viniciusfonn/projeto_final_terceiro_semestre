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

<script type="text/javascript" src="js/pisca.js"></script>

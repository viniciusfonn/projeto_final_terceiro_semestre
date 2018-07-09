<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("header.php"); ?>

<body>
	<?php require_once("nav.php"); ?>
	
	
	<div class="container contato">
		<h2>Entre em contato com o <a href="home.php">Minha Consulta</a></h2><br><br>
		<form action="envia-email.php" method="POST"> 
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="nome" class="form-control" id="nome_contato" placeholder="Insira seu nome" name="nome">
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label for="exampleFormControlInput1">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="nome@exemplo.com" name="email">
					</div>
				</div>
				
				<div class="col-md-8">
					<div class="form-group">
						<label for="mensagem">Mensagem:</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="mensagem"></textarea>
					</div>
				</div>	
			</div>
			<button type="submit" class="btn btn-success">Enviar</button>
		</form>
	</div>
	
	<?php require_once("footer.php"); ?>
</body>
</html>

<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
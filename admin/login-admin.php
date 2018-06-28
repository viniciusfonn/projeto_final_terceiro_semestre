<!DOCTYPE html>
<html lang="en">
<?php require_once('../header.php'); ?>
<body>
	<div class="bg">
		<div class="container">
			<center>
			<form>
				<div class="form-admin">
				<div class="form-group">
					<label for="email-admin">Login:</label>
					<input type="email" class="form-control" id="email-admin" aria-describedby="email-admin" placeholder="Digite o email do administrador" name="login-admin">
				</div>

				<div class="form-group">
					<label for="senha-admin">Senha:</label>
					<input type="password" class="form-control" id="senha-admin" placeholder="Digite a senha do administrador" name="senha-admin">
				</div>
				<button type="submit" class="btn btn-primary">Entrar</button>
			</div>
			</form>
			</center>
		</div>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>

<?php include("header.php"); 
require_once('_funcoes/funcoes_login_paciente.php');
require_once('_funcoes/funcoes_paciente.php'); ?>



<body>
<div class="bg-cadastro-cm">
<div align="center" style="padding-top: 15px; padding-bottom: 15px; ">
	<a href="home.php"><img src="img/logo-frase-preta.png" alt="logo" width="100px"></a>
</div>
	

<div class="col-8 m-auto bg-cadastro-cm"><br><br>
	<div align="center">
		<a href="home.php"> <p class="btn btn-primary">Início</p></a>
	</div>
	
	<h1>Editar cadastro:</h1><br>
				<form action="logica_cadastra_paciente.php" method="POST" >
					<div>
					<h4>Dados pessoais:</h4><br>
					<div class="row">
						<div class="col">
							<label for="name">Nome:</label>
							<input class="form-control" type="text" placeholder="Nome" name="nome" value="<?=$id_usuario_return['nome'] ?>">
						</div>
					
						<div class="col">
							<label for="registration">Sobrenome:</label>
							<input class="form-control" type="text" placeholder="sobrenome" name="sobrenome">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<label for="registration">Nascimento:</label>
							<input class="form-control" type="date" placeholder="Nascimento" name="dt_nasc">
						</div>
						<div class="col">
							<label for="registration">RG:</label>
							<input class="form-control" type="text" placeholder="RG" name="rg">
						</div>
						<div class="col">
							<label for="select">Sexo:</label>
	    					<select class="form-control" name="sexo">
							    <option value="1">Masculino</option>
							    <option value="2">Feminino</option>
							    <option value="3">Outros</option>
	   					    </select>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<label for="registration">Login:</label>
							<input class="form-control" type="email" placeholder="Login" name="user_login" required>
						</div>
					
						<div class="col">
							<label for="registration">Senha:</label>
							<input class="form-control" type="password" placeholder="Senha" name="senha">
						</div>
					</div><br>
					<h4>Dados de localização:</h4>
					<div class="form-group">
						<label for="cep">CEP:</label>
						<input type="text" class="form-control" placeholder="CEP" name="cep" id="cep">
					</div>
					<div class="row">
						<div class="col">
							<label for="registration">Estado:</label>
							<input class="form-control" type="text" placeholder="Estado" name="estado" id="uf">
						</div>
						<div class="col">
							<label for="registration">Cidade:</label>
							<input class="form-control" type="text" placeholder="Cidade" name="cidade" id="cidade">
						</div>
						<div class="col">
							<label for="registration">Bairro:</label>
							<input class="form-control" type="text" placeholder="Bairro" name="bairro" id="bairro">
						</div>
					</div><br>
					<div class="row">
						<div class="col">
							<label for="registration">Rua:</label>
							<input class="form-control" type="text" placeholder="Rua" name="rua" id="rua">
						</div>					
						<div class="col">
							<label for="registration">Número:</label>
							<input class="form-control" type="text" placeholder="Número" name="numero">
						</div>
						<div class="col">
							<label for="registration">Complemento:</label>
							<input class="form-control" type="text" placeholder="Complemento" name="complemento">
						</div>
											
					</div><br><br>
					<h4>Contato:</h4>
					<div class="row">
						<div class="col">
							<label for="registration">Telefone:</label>
							<input class="form-control" type="text" placeholder="Telefone" name="nr_telefone">
						</div>
						<div class="col">
							<label for="select">Tipo de Telefone:</label>
	    					<select class="form-control" name="tipo">
							    <option value="1">Comercial</option>
							    <option value="2">Celular</option>
							    <option value="3">Fixo</option>
	   					    </select>
						</div>
					</div><br><br>
					<div class="row mb-4">
						<button type="submit" class="btn btn-primary" id="btn-form">Cadastrar</button>
					</div>
				</form>
			

</div>
<script type="text/javascript">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
<script type="text/javascript" src="js/cep.js"></script>
</body>
</html>
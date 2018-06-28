<?php 
require_once('_funcoes/funcoes_paciente.php');
require_once('_funcoes/funcoes_login_paciente.php');


	verificausuario();


	$id=$_POST['id_usuario'];

	$paciente=busca_paciente($conexao,$id_usuario);
	$paciente_endereco=busca_paciente_telefone($conexao,$id_usuario);
	$paciente_tel=busca_paciente_endereco($conexao,$id_usuario);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualiza</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>


<div class="col-8 m-auto">
				<form action="logica_atualiza_paciente.php" method="POST" >

					<input type="hidden" name="id_usuario" value="<?=$paciente['id_usuario']?>">
					<div class="form-group">
						 <label for="name">Nome:</label>
						<input class="form-control" type="text" placeholder="Nome" name="nome" value="<?$paciente['nome']?>">
					</div>
					<div class="form-group">
						<label for="registration">Sobrenome:</label>
						<input class="form-control" type="text" placeholder="sobrenome" name="sobrenome" value="<?$paciente['sobrenome']?>">
					</div>
					<div class="form-group">
						<label for="registration">Nascimento:</label>
						<input class="form-control" type="date" placeholder="Nascimento" name="dt_nasc" value="<?$paciente['dt_nasc']?>">
					</div>
					<div class="form-group">
						<label for="registration">RG:</label>
						<input class="form-control" type="text" placeholder="RG" name="rg" value="<?$paciente['rg']?>">
					</div>
					<div class="form-group">
						<label for="registration">Sexo:</label>
						<input class="form-control" type="text" placeholder="Sexo" name="sexo" value="<?$paciente['rg']?>">
					</div>
					<div class="form-group">
						<label for="registration">Login:</label>
						<input class="form-control" type="text" placeholder="Login" name="login" value="<?$paciente['login']?>">
					</div>
					<div class="form-group">
						<label for="registration">Senha:</label>
						<input class="form-control" type="text" placeholder="Senha" name="senha" value="<?$paciente['senha']?>">
					</div>
					<div class="form-group">
						<label for="registration">Cidade:</label>
						<input class="form-control" type="text" placeholder="Cidade" name="cidade" value="<?$paciente_endereco['cidade']?>">
					</div>
					<div class="form-group">
						<label for="registration">Estado:</label>
						<input class="form-control" type="text" placeholder="Estado" name="estado" value="<?$paciente_endereco['estado']?>">
					</div>
					<div class="form-group">
						<label for="registration">Rua:</label>
						<input class="form-control" type="text" placeholder="Rua" name="rua" value="<?$paciente_endereco['rua']?>">
					</div>
					<div class="form-group">
						<label for="registration">Número:</label>
						<input class="form-control" type="text" placeholder="Número" name="numero" value="<?$paciente_endereco['numero']?>">
					</div>
					<div class="form-group">
						<label for="registration">Complemento:</label>
						<input class="form-control" type="text" placeholder="Complemento" name="complemento" value="<?$paciente_endereco['complemento']?>">
					</div>
					<div class="form-group">
						<label for="registration">Bairro:</label>
						<input class="form-control" type="text" placeholder="Bairro" name="bairro"
						value="<?$paciente_endereco['bairro']?>">
					</div>
					<div class="form-group">
						<label for="registration">Telefone:</label>
						<input class="form-control" type="text" placeholder="Telefone" name="nr_telefone" value="<?$paciente_tel['nr_telefone']?>">
					</div>
					<div class="form-group">
						<label for="select">Tipo de Telefone:</label>
    					<select class="form-control" name="tipo">
						    <option value="1">Comercial</option>
						    <option value="2">Celular</option>
						    <option value="3">Fixo</option>
   					    </select>
					</div>
					
					<button type="submit" class="btn btn-primary" id="btn-form">enviar</button>

				</form>



<script type="text/javascript">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>
</body>
</html>






 
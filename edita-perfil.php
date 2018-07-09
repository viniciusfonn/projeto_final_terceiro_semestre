<!DOCTYPE html>
<html>

<?php require_once("header.php"); 
require_once('_funcoes/funcoes_login_paciente.php');
require_once('_funcoes/funcoes_paciente.php');


$id_usuario=$_SESSION["usuario_logado_id"];


	$paciente=busca_paciente($conexao,$id_usuario);
	$paciente_tel=busca_paciente_telefone($conexao,$id_usuario);
	$paciente_endereco=busca_paciente_endereco($conexao,$id_usuario);


 ?>



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
				<form action="logica_atualiza_paciente.php" method="POST" id="form-cad" >
					<div>
					<h4>Dados pessoais:</h4><br>
					<div class="row">
						<div class="col">
							<label for="name">Nome:</label>
							<input class="form-control" type="text" placeholder="Nome" name="nome" value="<?=$paciente['nome']?>">
						</div>
					
						<div class="col">
							<label for="registration">Sobrenome:</label>
							<input class="form-control" type="text" placeholder="sobrenome" name="sobrenome" value="<?=$paciente['sobrenome']?>">
						</div>
					</div>

					<div class="row">
						<div class="col">
							<label for="registration">Nascimento:</label>
							<input class="form-control" type="date" placeholder="Nascimento" name="dt_nasc" value="<?=$paciente['dt_nasc']?>">
						</div>
						<div class="col">
							<label for="registration">RG:</label>
							<input class="form-control" type="text" placeholder="RG" name="rg"value="<?=$paciente['dt_nasc']?>" >
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
							<input class="form-control" type="email" placeholder="Login" name="user_login"value="<?=$paciente['login']?>" required >
						</div>
					
						<div class="col">
							<label for="registration">Senha:</label>
							<input class="form-control" type="password" placeholder="Senha" name="senha" value="<?=$paciente['senha']?>">
						</div>
					</div><br>
					<h4>Dados de localização:</h4>
					<div class="form-group">
						<label for="cep">CEP:</label>
						<input type="text" class="form-control" placeholder="CEP" name="cep" id="cep" value="<?=$paciente_endereco['cep']?>">
					</div>
					<div class="row">
						<div class="col">
							<label for="registration">Estado:</label>
							<input class="form-control" type="text" placeholder="Estado" name="estado" id="uf" value="<?=$paciente_endereco['estado']?>">
						</div>
						<div class="col">
							<label for="registration">Cidade:</label>
							<input class="form-control" type="text" placeholder="Cidade" name="cidade" id="cidade" value="<?=$paciente_endereco['cidade']?>">
						</div>
						<div class="col">
							<label for="registration">Bairro:</label>
							<input class="form-control" type="text" placeholder="Bairro" name="bairro" id="bairro" value="<?=$paciente_endereco['bairro']?>">
						</div>
					</div><br>
					<div class="row">
						<div class="col">
							<label for="registration">Rua:</label>
							<input class="form-control" type="text" placeholder="Rua" name="rua" id="rua" value="<?=$paciente_endereco['rua']?>">
						</div>					
						<div class="col">
							<label for="registration">Número:</label>
							<input class="form-control" type="text" placeholder="Número" name="numero" value="<?=$paciente_endereco['numero']?>">
						</div>
						<div class="col">
							<label for="registration">Complemento:</label>
							<input class="form-control" type="text" placeholder="Complemento" name="complemento" value="<?=$paciente_endereco['complemento']?>">
						</div>
											
					</div><br><br>
					<h4>Contato:</h4>
					<div class="row">
						<div class="col">
							<label for="registration">Telefone:</label>
							<input class="form-control" type="text" placeholder="Telefone" name="nr_telefone" value="<?=$paciente_tel['num_telefone']?>">
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
						<input type="hidden" name="id_usuario" value="<?=$paciente['id_usuario']?>">
						<button type="submit" class="btn btn-primary" id="btn-form">Cadastrar</button>
					</div>
				</form>
			

</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
		<script type="text/javascript" src="js/cep.js"></script>

<script>

			
			$(document).ready( function(){

				$("#form-cad").validate({
					rules:{

						nome: {
							required: true,
							rangelength: [4,15]
						},

						sobrenome: {
							required: true,
							rangelength: [4,30]
						},

						rg: {
							required: true,
							number: true,
							rangelength: [10,10]
						},

						user_login:{
							required: true

						},

						senha:{
							required: true,
							rangelength: [4,10]
						},

						numero: {
							required: true,
							number: true
						},

						nr_telefone:{
							required: true,
							number: true
						}

					},

					messages:{

						nome: {
							required: "Este campo é obrigatório",		
							rangelength: "Digite entre 4 e 15 caracteres"
						},

						sobrenome: {
							required: "Este campo é obrigatório",		
							rangelength: "Digite entre 4 e 30 caracteres"
						},

						rg: {
							required: "Este campo é obrigatório",
							number:"Digite apenas números",
							rangelength: "O RG precisa ter 10 dígitos"

						}, 

						user_login:{
							required: "Este campo é obrigatório"

						},

						senha:{
							required: "Este campo é obrigatorio",
							rangelength: "Digite entre 4 e 10 caracteres"
						},

						numero: {
							required: "Este campo é obrigatório",
							number: "Digite apenas números"
						},

						nr_telefone:{
							required: "Este campo é obrigatório",
							number: "Digite apenas números"
						}

					}
				});		
			});

		</script>
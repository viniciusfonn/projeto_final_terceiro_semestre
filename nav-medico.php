<nav id="menu" class="menu">
	<span class="logo"><img src="img/logo_novo.png" alt="logo" width="140px"></span>
	<ul class="lista1">



		<?php 
		require_once('_funcoes/funcoes_login_medico.php');
		
		require_once('mostra-alerta.php');
		

 			// VALIDAÇAO DE LOGADO OU NAO

		if(usuarioEstaLogado()){?>
			
			
			<div class="btn-group dropleft">
				
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Perfil
				</button>
				<div class="dropdown-menu">
					<ul class="lista-drop">
						<li><a href="painel_medico.php">Consultas</a></li>
						<li><a href="agendamento-medico.php">Indisponíveis</a></li>
						<li><a href="historico-medico.php">Histórico</a></li>
						<li><a href="logout.php">Deslogar</a></li>
					</ul>
				</div>
			</div>




		<?php } else{ ?>  

			<li><a href="home.php">Home</a></li>
			<li><a href="contato.php">Contate-nos</a></li>
			<li><a href="sobre.php">Sobre</a></li>

			<!-- BOTÃO LOGIN MODAL -->
			<button type="button" class="btn btn-primary btn-login-mc" data-toggle="modal" data-target="#exampleModal">
				Entrar
			</button>

			<!-- Modal-->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			<?php 
		}
		?>	

		<!-- TERMINA MODAL AQUI!!! -->

	</ul>
</nav>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

<script>


	$(document).ready( function(){

		$("#formlogin").validate({
			rules:{
				login_user:{
					required: true

				},
				senha:{
					required: true,
					rangelength: [4,10]
				}

			},	
				messages:{
					login_user:{
						required: "Este campo é obrigatorio"
						
					},
					senha:{
						required: "Este campo é obrigatorio",
						rangelength: "Digite entre 4 e 10 caracteres"
					}
				}
			});		
	});

</script>
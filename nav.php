<!--
<nav id="menu" class="menu">
		<span class="logo"><img src="logo_novo.png" alt="logo" width="140px"></span>
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="agendamento.php">Agendamento</a></li>
		   <li><a href="#">Contate-nos</a></li>
		  <!-- BOTÃO LOGIN MODAL 
			<button type="button" class="btn btn-primary btn-login-mc" data-toggle="modal" data-target="#exampleModal">
			Médico
			</button>
			<button type="button" class="btn btn-success btn-login-mc" data-toggle="modal" data-target="#exampleModal">
			Paciente
			</button>

			<!-- Modal
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
				    <form>
						<div class="form-group">
						   <label for="nome">Email:</label>
						   <input type="email" class="form-control" id="email" aria-describedby="login" placeholder="Digite seu email" name="login_user">
						</div>
						<div class="form-group">
						   <label for="exampleInputPassword1">Senha:</label>
						   <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
						</div>
						<div class="botao-registro-cm">
							<button type="submit" class="btn btn-success">Entrar</button>
							<div class="registro-cm"><a href="cadastro_paciente.php">Ainda não tenho cadastro</a></div>
						</div>
					</form>   
			      </div>
			      
			    </div>
			  </div>
			</div>

		</ul>
	</nav>
-->

<nav id="menu" class="menu">
		<span class="logo"><img src="img/logo_novo.png" alt="logo" width="140px"></span>
		<ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="agendamento.php">Agendamento</a></li>
		  <li><a href="#">Contate-nos</a></li>



	<?php 
		  require_once('_funcoes//funcoes_login_paciente.php');
		  require_once('mostra-alerta.php');

 			// VALIDAÇAO DE LOGADO OU NAO

        mostraAlerta("success");
       	mostraAlerta("danger");
	     	  if(usuarioEstaLogado()){?>
	     	  	<p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Deslogar</a></p> 	
	<?php } else{ ?>  
	     	  	

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


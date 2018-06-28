<?php include("nav-admin.php") ?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Médicos cadastrados</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Médicos cadastrados
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group texto-admin">
								<table class="table">
									<thead>
										<tr>

											<th scope="col">CRM</th>
											<th scope="col">Nome completo</th>
											<th scope="col">Especialidade</th>
										</tr>
									</thead>
									<tbody>
										 
									<?php foreach ($medicos as $medico) {?>
										 	<tr>
											<th scope="row"><?=$medico['crm']?></th>
											<td><?=$medico['nome']?>&nbsp<?=$medico['sobrenome']?></td>
											<td><?=$medico['especialidade']?></td>
											
										</tr>
										<?php } ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

</body>

</html>
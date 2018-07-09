<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
	<?php 
		require_once('_funcoes/funcoes_especialidades.php');
		require_once('conecta.php');
		// array com todas as especialidades.
		$especialidades=listaEspecialidades($conexao);


		// teste para o agendamento
		date_default_timezone_set('America/Sao_Paulo');
		// $data = date('Y-m-d');
		// fim teste

	?>
</head>
<script type="text/javascript">
                  function mudarAction(){
                document.formulario.action = "logica_login_medico.php";
                document.formulario.submit();
              }
</script>
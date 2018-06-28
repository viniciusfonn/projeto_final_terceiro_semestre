<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel Administrativo - Minha Consulta</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilo.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php 
        require_once('funcoes_especialidades.php');
        require_once('funcoes_medico.php');

        $especialidades=listaEspecialidades($conexao);
        $medicos=mostra_medico($conexao);
        
        
 ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Painel Administrativo - Minha Consulta</a>
            </div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="cadastro-especialidade.php"><i class="fa fa-sitemap fa-fw"></i> Cadastro de especialidades</a>
                        </li>
                        <li>
                            <a href="cadastro-medico.php"><i class="fa fa-edit fa-fw"></i>Cadastro de médicos</a>
                        </li>
                        <li>
                            <a href="lista-medicos.php"><i class="fa fa-wrench fa-fw"></i>Médicos cadastrados</a>
                        </li>
                        <li>
                            <a href="informacoes_adm.php"><i class="fa fa-info fa-fw"></i>Informações</a>
                        </li>
                        <li>
                            <a href="../home.php"><i class="fa fa-sign-out fa-fw"></i> Sair do Sistema</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<?php include("nav-admin.php") ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de especialidade</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cadastro de especialidade
                       </div>
                       <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="logica_cadastra_especialidade.php" method="POST">
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <input class="form-control" placeholder="Digite aqui a especialidade" name="especialidade">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Cadastrar</button>
                                    
                                </form>
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

<?php include("nav-admin.php") ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de médicos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Cadastro de médicos
                       </div>
                       <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" method="POST" action="logica_cadastra_medico.php">
                                    <div class="form-group">
                                        <label>Nome:</label>
                                        <input class="form-control" placeholder="Digite o nome do médico" name="nome">
                                    </div>

                                    <div class="form-group">
                                        <label>Sobrenome:</label>
                                        <input class="form-control" placeholder="Digite o sobrenome do médico" name="sobrenome">
                                    </div>

                                     <div class="form-group">
                                        <label>CRM:</label>
                                        <input class="form-control" placeholder="Digite o CRM do médico" name="crm">
                                    </div>

                                     <div class="form-group">
                                        <label>Login:</label>
                                        <input class="form-control" placeholder="Digite o login do médico"  name="login">
                                    </div>

                                     <div class="form-group">
                                        <label>Senha:</label>
                                        <input class="form-control" placeholder="Digite a senha do médico" name="senha">
                                    </div>

                                    <div class="form-group">
                                        <label>Especialidade:</label><br>
                                        <select name="id_especialidade">
                                            <?php foreach ($especialidades as $especialidade) { ?>
                                            <option value="<?=$especialidade['id_especialidade']?>"> <?=$especialidade['descricao']?></option>  
                                            <?php } ?>
                                        </select>
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

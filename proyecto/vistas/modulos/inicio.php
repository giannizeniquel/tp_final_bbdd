<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Inicio</h1>
                </div>
            </div>
            <hr>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-2"></div>
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <?php 
                                if ($_SESSION['nombre'] != "") {
                                    echo('<h3 class="card-title">'.$_SESSION['nombre'].'</h3>');
                                }else{
                                    echo('<h3 class="card-title">Nombre persona</h3>');
                                }
                            ?>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <?php 
                                if ($_SESSION['usuario'] != "") {
                                    echo('<strong>Usuario: </strong>'.$_SESSION['usuario']);
                                }else{
                                    echo('<strong>Usuario: </strong>');
                                }
                            ?>
                        </div>
                        <div class="card-body">
                        <?php 
                                if ($_SESSION['perfil'] != "") {
                                    echo('<strong>Area: </strong>'.$_SESSION['perfil']);
                                }else{
                                    echo('<strong>Area: </strong>');
                                }
                            ?>
                            
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                        <?php 
                                if ($_SESSION['ultimo_login_fecha'] != "") {
                                    echo('<strong>Último inicio de sesión: </strong>'.$_SESSION['ultimo_login_fecha']);
                                }else{
                                    echo('<strong>Último inicio de sesión: </strong>');
                                }
                            ?>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
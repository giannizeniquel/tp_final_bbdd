<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
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
                <div class="col-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLoginForm">
                        <i class="nav-icon fas fa-plus"></i>
                        Nuevo Usuario
                    </button>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal HTML Markup -->
<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Crear Usuario</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4>Datos personales</h4>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_dni" value="" require placeholder="DNI">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_nombre" value="" require placeholder="Apellido y Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_telefono" value="" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_direccion" value="" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check_profesional"> Profesional
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_titulo" value="" placeholder="Nombre título profesional">
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4>Datos de sesión</h4>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_email" value="" placeholder="Correo electrónico" require>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="password" class="form-control input-lg" name="usuario_clave" require placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="password" class="form-control input-lg" name="usuario_clave_rep" require placeholder="Repetir contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="pedido_productos" name="usuario_area" require >
                            <option disabled selected>Seleccione un area o sector</option>
                            <option value="Area 1">Area 1</option>
                            <option value="Area 2">Area 2</option>
                            <option value="Area 3">Area 3</option>
                            <option value="Area 4">Area 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">
                                Crear usuario
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
                                <th scope="col">Acciones</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Perfil</th>
                                <th scope="col">Ultimo login</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $item = null;
                                $valor = null;
                                $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                                foreach ($usuarios as $key => $value) {
                                    echo('
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning btn-xs btnEditarUsuario" idUsuario="'.$value["id"].'"
                                                    data-toggle="modal" data-target="#modalEditarUsuario" title="Editar">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>

                                                <button class="btn btn-danger btn-xs btnEliminarUsuario" idUsuario="'.$value["id"].'"
                                                usuario="'.$value['usuario'].'" style="margin-left: 15%; width: 30px;" title="Eliminar">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <th scope="row">'.$value['id'].'</th>
                                        <td>'.$value['nombre'].'</td>
                                        <td>'.$value['usuario'].'</td>
                                        <td>'.$value['perfil'].'</td>
                                        <td>'.$value['ultimo_login'].'</td>
                                    </tr>
                                    ');
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal HTML Markup AGREGAR-->
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
                            <input type="text" class="form-control input-lg" name="usuario_dni" value="" required placeholder="DNI">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="usuario_nombre" value="" required placeholder="Apellido y Nombre">
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
                            <input type="text" class="form-control input-lg" name="usuario_email" value="" placeholder="Correo electrónico" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="password" class="form-control input-lg" name="usuario_clave" required placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="password" class="form-control input-lg" name="usuario_clave_rep" required placeholder="Repetir contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="pedido_productos" name="usuario_rol" required >
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
                    <?php 
                        $crearUsuario = new ControladorUsuarios();
                        $crearUsuario -> ctrCrearusuario();
                    ?>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal HTML Markup EDITAR-->
<div id="modalEditarUsuario" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Editar Usuario</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4>Datos personales</h4>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="editar_usuario_dni" value="" required readonly placeholder="DNI">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_nombre" name="editar_usuario_nombre" value="" required placeholder="Apellido y Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_telefono" name="editar_usuario_telefono" value="" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_direccion" name="editar_usuario_direccion" value="" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="editar_check_profesional" name="editar_check_profesional"> Profesional
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_titulo" name="editar_usuario_titulo" value="" placeholder="Nombre título profesional">
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4>Datos de sesión</h4>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_email" name="editar_usuario_email" value="" placeholder="Correo electrónico" readonly required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_clave" name="editar_usuario_clave" required placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" id="editar_usuario_clave_rep" name="editar_usuario_clave_rep" required placeholder="Repetir Contraseña">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="editar_usuario_rol" name="editar_usuario_rol" required >
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
                                Editar usuario
                            </button>
                        </div>
                    </div>
                    <?php 
                        $editarUsuario = new ControladorUsuarios();
                        $editarUsuario -> ctrEditarUsuario();
                    ?>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="vistas/js/usuarios.js"></script>
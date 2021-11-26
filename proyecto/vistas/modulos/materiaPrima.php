<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Materia Prima</h1>
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
                        Nueva Materia Prima
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

<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Nueva Materia Prima</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <div style="text-align: center; background-color: #E67E22; color: #fff;">
                            <h4 class="control-label">Detalle Materia Prima</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="materiaP_nombre" required placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="number" class="form-control input-lg" name="materiaP_cant" required placeholder="Cantidad" step=".01">
                        </div>
                    </div>
                    <!-- unidad medida -->
                    <input type="hidden" name="materiaP_unidad_medida" value="kilogramos">
                    <div class="form-group">
                        <div>
                            <textarea name="producto_descripcion" rows="3" cols="62" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="materiaP_categoria">
                            <option disabled selected>Seleccione una categoría</option>
                            <option value="Categoria 1">Categoria 1</option>
                            <option value="Categoria 2">Categoria 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check_procesada"> Procesada
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="producto_tiempo_fabricacion" placeholder="Tiempo de fabricación en días">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="number" class="form-control input-lg" name="materiaP_precio" required placeholder="Precio" step=".01">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Ingresar Materia Prima</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
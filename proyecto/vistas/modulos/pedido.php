<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pedidos</h1>
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
                        Nuevo Pedido
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
                <h2 class="modal-title">Nuevo Pedido - Producto</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <div style="text-align: center; background-color: #E67E22; color: #fff;">
                            <h4 class="control-label">Cliente</h4>
                        </div>
                        <div>
                            <input type="text" class="form-control input-lg" name="email" value="" placeholder="DNI/CUIT" require>
                            <button type="button" class="btn btn-success col-12" style="margin-top: 1%;">
                                <i class="nav-icon fas fa-check"></i>
                                Buscar cliente
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="cliente_nombre" readonly  require>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Puntos</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="cliente_puntos" readonly require>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4 class="control-label">Detalle pedido</h4>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fecha Pedido</label>
                        <div>
                            <input type="date" class="form-control input-lg" name="pedido_fecha" readonly require>
                        </div>
                    </div>
                    <hr>
                    <!-- PRODUCTOS -->
                    <div id="linea_producto">
                        <div>
                            <div class="form-group">
                                <label>Producto</label>
                                <select class="form-control" id ="pedido_productos" name="pedido_productos_0" require>
                                    <option disabled selected>Seleccione una producto</option>
                                    <option value="Prod 2">Prod 1</option>
                                    <option value="Prod 2">Prod 2</option>
                                    <option value="Prod 3">Prod 3</option>
                                    <option value="Prod 4">Prod 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cantidad</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="pedido_prod_cant_0" require>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sub Total</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="pedido_prod_subTotal_0" readonly require>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success col-12" style="margin-top: 1%;" onclick="agregarProducto()">
                        <i class="nav-icon fas fa-plus"></i>
                        Agregar Producto
                    </button>
                    <hr>
                    <!--  -->
                    <div class="form-group">
                        <label class="control-label">Total</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="pedido_total" readonly require>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check_pagado"> Pagado
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control" require>
                            <option disabled selected>Seleccione un estado de pedido</option>
                            <option value="Enrtegado">Enrtegado</option>
                            <option value="En producción">En producción</option>
                            <option value="Pendiente de producción">Pendiente de producción</option>
                            <option value="Pendiente de entrega">Pendiente de entrega</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Registrar pedido</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="vistas/js/pedido.js"></script>
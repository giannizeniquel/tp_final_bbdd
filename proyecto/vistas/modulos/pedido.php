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

    <?php 

        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $day . '/' . $month . '/' . $year;

        $link = new PDO("mysql:host=localhost;dbname=u203885220_reciplas","u203885220_reciplas","Admin123");
        $link -> exec("set names utf8");
        $stmt = $link->prepare("SELECT pe.nombre, p.estado, p.estaPagado FROM venta v INNER JOIN pedido p ON p.numero = v.numeroPedido INNER JOIN cliente c ON c.idPersona = v.idCliente INNER JOIN persona pe ON pe.idPersona = c.idPersona");        
        $stmt->execute();
        $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);

    ?>

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
                                <th scope="col">Cliente</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Esta Pagado</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    foreach ($dataRow as $key => $value) {
                                        ?>
                                        <tr>
                                        <td><?php echo $value['nombre'] ?></td><?php
                                        ?><td><?php echo $value['estado'] ?></td><?php
                                        ?><td><?php echo $value['estaPagado'] != 1 ?  'No' :  'Si'; ?></td>
                                        </tr>
                                        <?php
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

<?php 

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $day . '/' . $month . '/' . $year;

    $link = new PDO("mysql:host=localhost;dbname=u203885220_reciplas","u203885220_reciplas","Admin123");
    $link -> exec("set names utf8");
    $stmt = $link->prepare("SELECT a.id, a.nombre, p.precio FROM articulo a INNER JOIN producto p ON p.idArticulo = a.id");        
    $stmt->execute();
    $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Nuevo Pedido - Producto</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="/tp_final_bbdd/proyecto/modelos/agregarPedido.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <div style="text-align: center; background-color: #E67E22; color: #fff;">
                            <h4 class="control-label">Cliente</h4>
                        </div>
                        <div>
                            <input type="text" class="form-control input-lg" name="dni" placeholder="DNI/CUIT" require>
                        </div>
                    </div>
                    <hr>
                    <div style="text-align: center; background-color: #E67E22; color: #fff;">
                        <h4 class="control-label">Detalle pedido</h4>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fecha Pedido</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="pedido_fecha" readonly value="<?php echo $today; ?>">
                        </div>
                    </div>
                    <hr>
                    <!-- PRODUCTOS -->
                    <div id="linea_producto">
                        <div>
                            <div class="form-group">
                                <label>Producto</label>
                                <select class="form-control" id ="pedido_productos" name="producto1" require>
                                    <option disabled selected>Seleccione una producto</option>
                                    <?php
                                        foreach ($dataRow as $key => $value) {
                                            ?><option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] . ' - $' . $value['precio'] ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cantidad</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="cantidad1" require>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Producto</label>
                                <select class="form-control" id ="pedido_productos" name="producto2" require>
                                    <option disabled selected>Seleccione una producto</option>
                                    <?php
                                        foreach ($dataRow as $key => $value) {
                                            ?><option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] . ' - $' . $value['precio'] ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cantidad</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="cantidad2" require>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label>Producto</label>
                                <select class="form-control" id ="pedido_productos" name="producto3" require>
                                    <option disabled selected>Seleccione una producto</option>
                                    <?php
                                        foreach ($dataRow as $key => $value) {
                                            ?><option value="<?php echo $value['id'] ?>"><?php echo $value['nombre'] . ' - $' . $value['precio'] ?></option><?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Cantidad</label>
                                <div>
                                    <input type="text" class="form-control input-lg" name="cantidad3" require>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!--  -->
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
                        <select class="form-control" name="estado" require>
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
<script>
    function calcPrecio2(val){
        let precio = document.getElementById("precio2").value;
        let res = precio * val;
        document.getElementById("subTotal2").value = res;
    }
</script>
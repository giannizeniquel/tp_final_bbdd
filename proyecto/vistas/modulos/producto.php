<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Productos</h1>
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
                        Nuevo Producto
                    </button>
                </div>
            </div>
            <?php
                $link = new PDO("mysql:host=localhost;dbname=reciplas","root","admin123");
                $link -> exec("set names utf8");
                $stmt = $link->prepare("SELECT a.id, a.nombre, a.descripcion, p.nombreCategoria, a.cantidad, a.unidadMedida FROM articulo a INNER JOIN producto p ON p.idArticulo = a.id");        
                $stmt->execute();
                $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <div class="row" style="margin-top: 2%;">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Unidad de Medida</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    foreach ($dataRow as $key => $value) {
                                        ?>
                                        <tr>
                                        <td><?php echo $value['id'] ?></td><?php
                                        ?><td><?php echo $value['nombre'] ?></td><?php
                                        ?><td><?php echo $value['descripcion'] ?></td><?php
                                        ?><td><?php echo $value['nombreCategoria'] ?></td><?php
                                        ?><td><?php echo $value['cantidad'] ?></td><?php
                                        ?><td><?php echo $value['unidadMedida'] ?></td>
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
    $link = new PDO("mysql:host=localhost;dbname=reciplas","root","admin123");
    $link -> exec("set names utf8");
    $stmt = $link->prepare("SELECT nombre FROM categoria");        
    $stmt->execute();
    $dataRow = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Nuevo Producto</h2>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="/tp_final_bbdd/proyecto/modelos/agregarProducto.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <div style="text-align: center; background-color: #E67E22; color: #fff;">
                            <h4 class="control-label">Detalle Producto</h4>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="producto_nombre" required placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="number" class="form-control input-lg" name="producto_cant" required placeholder="Cantidad" step="0">
                        </div>
                    </div>
                    <input type="hidden" name="producto_unidad_medida" value="unidades">
                    <div class="form-group">
                        <div>
                        <textarea name="producto_descripcion" rows="3" cols="62" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="producto_categoria">
                            <option disabled selected>Seleccione una categoría</option>
                            <?php
                                foreach ($dataRow as $key => $value) {
                                    ?><option value="<?php echo $value['nombre'] ?>"><?php echo $value['nombre'] ?></option><?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="text" class="form-control input-lg" name="producto_tiempo_fabricacion" placeholder="Tiempo de fabricación en días">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <input type="number" class="form-control input-lg" name="producto_precio" required placeholder="Precio" step=".01">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Cargar producto</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
    require_once "conexion.php";



    $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as id FROM articulo");        
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $dataRow;
    $id = $id['id'] + 1;

    $nombre = isset($_POST['producto_nombre']) ? $_POST['producto_nombre'] : die();
    $cantidad = isset($_POST['producto_cant']) ? $_POST['producto_cant'] : die();
    $unidadMedida = isset($_POST['producto_unidad_medida']) ? $_POST['producto_unidad_medida'] : die();
    $descripcion = isset($_POST['producto_descripcion']) ? $_POST['producto_descripcion'] : die();

    $nombreCategoria = isset($_POST['producto_categoria']) ? $_POST['producto_categoria'] : die();
    $tiempoFabricacion = isset($_POST['producto_tiempo_fabricacion']) ? $_POST['producto_tiempo_fabricacion'] : die();
    $precio = isset($_POST['producto_precio']) ? $_POST['producto_precio'] : die();

    $stmt = Conexion::conectar()->prepare("INSERT INTO `articulo` (`id`, `nombre`, `cantidad`, 
    `unidadMedida`, `descripcion`) VALUES (:id, :nombre, :cantidad, :unidadMedida, :descripcion)");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":cantidad", $cantidad);
    $stmt->bindParam(":unidadMedida", $unidadMedida);
    $stmt->bindParam(":descripcion", $descripcion);
    $stmt->execute();

    $stmt = Conexion::conectar()->prepare("INSERT INTO `producto` (`idArticulo`, `nombreCategoria`, 
    `tiempoFabricacion`, `precio`) VALUES (:id, :nombreCategoria, :tiempoFabricacion, :precio)");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nombreCategoria", $nombreCategoria);
    $stmt->bindParam(":tiempoFabricacion", $tiempoFabricacion);
    $stmt->bindParam(":precio", $precio);
    $stmt->execute();


    header("Location:http://localhost/tp_final_bbdd/proyecto/producto");
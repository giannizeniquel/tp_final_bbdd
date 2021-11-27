<?php
    require_once "conexion.php";

    $stmt = Conexion::conectar()->prepare("SELECT COUNT(*) as id FROM pedido");        
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $dataRow;
    $id = $id['id'] + 1;

    $estado = isset($_POST['estado']) ? $_POST['estado'] : die();
    
    $stmt = Conexion::conectar()->prepare("INSERT INTO `pedido` (`numero`, `estado`, `fechaEmitido`, 
    `precioTotal`, `estaPagado`) VALUES (:id, :estado, NOW(), NULL, NULL)");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":estado", $estado);
    $stmt->execute();

    $dniCliente = $_POST['dni'];
    $stmt = Conexion::conectar()->prepare("SELECT idPersona FROM persona WHERE dni = :dni");
    $stmt->bindParam(":dni", $dniCliente);
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $idCliente = $dataRow;
    $idCliente = $idCliente['idPersona'];
    $idUsuario = isset($_SESSION['idUsuario']) ? $_SESSION['idUsuario'] : 1;

    $conexion = Conexion::conectar();

    $stmt = $conexion->prepare("INSERT INTO `venta` (`numeroPedido`, `idUsuario`, `idCliente`, 
    `numeroFactura`, `letraFactura`, `tipoDePago`) VALUES (:id, :idUsuario, :idCliente, NULL, NULL, 'Contado')");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":idUsuario", $idUsuario);
    $stmt->bindParam(":idCliente", $idCliente);
    $stmt->execute();

    $stmt = $conexion->prepare("SELECT MAX(numeroPedido) as id FROM venta");
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $dataRow;
    $numeroVenta = $id['id'];

    
    if (isset($_REQUEST['producto1'])) {
        $idProducto = $_REQUEST['producto1'];
        $stmt = Conexion::conectar()->prepare("SELECT precio FROM producto WHERE idArticulo = :idProducto");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $precio = $dataRow;
        $precio = $precio['precio'];        

        $cantidad = isset($_POST['cantidad1']) ? $_POST['cantidad1'] : die();

        $precioVenta = $precio * $cantidad;

        $stmt = Conexion::conectar()->prepare("INSERT INTO `producto_venta` (`idProducto`, `numeroVenta`, 
        `cantidad`, `precio`) VALUES (:idProducto, :numeroVenta, :cantidad, :precioVenta)");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->bindParam(":numeroVenta", $numeroVenta);
        $stmt->bindParam(":cantidad", $cantidad);
        $stmt->bindParam(":precioVenta", $precioVenta);
        $stmt->execute();
    }

    if (isset($_REQUEST['producto2'])) {
        $idProducto = $_REQUEST['producto2'];
        $stmt = Conexion::conectar()->prepare("SELECT precio FROM producto WHERE idArticulo = :idProducto");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $precio = $dataRow;
        $precio = $precio['precio'];        

        $cantidad = isset($_POST['cantidad2']) ? $_POST['cantidad2'] : die();

        $precioVenta = $precio * $cantidad;

        $stmt = Conexion::conectar()->prepare("INSERT INTO `producto_venta` (`idProducto`, `numeroVenta`, 
        `cantidad`, `precio`) VALUES (:idProducto, :numeroVenta, :cantidad, :precioVenta)");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->bindParam(":numeroVenta", $numeroVenta);
        $stmt->bindParam(":cantidad", $cantidad);
        $stmt->bindParam(":precioVenta", $precioVenta);
        $stmt->execute();
    }

    if (isset($_REQUEST['producto3'])) {
        $idProducto = $_REQUEST['producto3'];
        $stmt = Conexion::conectar()->prepare("SELECT precio FROM producto WHERE idArticulo = :idProducto");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->execute();
        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
        $precio = $dataRow;
        $precio = $precio['precio'];        

        $cantidad = isset($_POST['cantidad3']) ? $_POST['cantidad3'] : die();

        $precioVenta = $precio * $cantidad;

        $stmt = Conexion::conectar()->prepare("INSERT INTO `producto_venta` (`idProducto`, `numeroVenta`, 
        `cantidad`, `precio`) VALUES (:idProducto, :numeroVenta, :cantidad, :precioVenta)");
        $stmt->bindParam(":idProducto", $idProducto);
        $stmt->bindParam(":numeroVenta", $numeroVenta);
        $stmt->bindParam(":cantidad", $cantidad);
        $stmt->bindParam(":precioVenta", $precioVenta);
        $stmt->execute();
    }
    

    header("Location:http://localhost/tp_final_bbdd/proyecto/pedido");
<?php

require_once "../modelos/conexion.php";

    //articulo
    $nombre = isset($_POST['materiaP_nombre']) ? $_POST['materiaP_nombre'] : die();
    $cantidad = isset($_POST['materiaP_cant']) ? $_POST['materiaP_cant'] : die();
    $unidadMedida = isset($_POST['materiaP_unidad_medida']) ? $_POST['materiaP_unidad_medida'] : die();
    $descripcion = isset($_POST['materiaP_descripcion']) ? $_POST['materiaP_descripcion'] : die();

    $stmt = Conexion::conectar()->prepare("INSERT INTO `articulo` (`nombre`, `cantidad`, 
    `unidadMedida`, `descripcion`) VALUES (:nombre, :cantidad, :unidadMedida, :descripcion)");
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":cantidad", $cantidad);
    $stmt->bindParam(":unidadMedida", $unidadMedida);
    $stmt->bindParam(":descripcion", $descripcion);
    $stmt->execute();

    $stmt = Conexion::conectar()->prepare("SELECT MAX(id) AS id FROM articulo");
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $dataRow;
    $id = $id['id'];
    
    //materia prima
    $nombreCategoria = isset($_POST['materiaP_categoria']) ? $_POST['materiaP_categoria'] : die();
    $check_procesada = isset($_POST['check_procesada']) ? "1" : "0";

    $stmt = Conexion::conectar()->prepare("INSERT INTO `materiaprima` (`idArticulo`, `nombreCategoria`, 
    `esProcesado`) VALUES (:id, :nombreCategoria, :esProcesado)");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nombreCategoria", $nombreCategoria);
    $stmt->bindParam(":esProcesado", $check_procesada);
    $stmt->execute();

    //preciocalidad
    $materiaP_calidad = isset($_POST['materiaP_calidad']) ? $_POST['materiaP_calidad'] : die();
    $materiaP_precio = isset($_POST['materiaP_precio']) ? $_POST['materiaP_precio'] : die();
    $materiaP_descripcion_calidad = isset($_POST['materiaP_descripcion_calidad']) ? $_POST['materiaP_descripcion_calidad'] : die();

    $stmt = Conexion::conectar()->prepare("INSERT INTO `preciocalidad` (`idMateriaPrima`, `calidad`, 
    `precio`, `descripcion`) VALUES (:id, :calidad, :precio, :descripcion)");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":calidad", $materiaP_calidad);
    $stmt->bindParam(":precio", $materiaP_precio);
    $stmt->bindParam(":descripcion", $materiaP_descripcion_calidad);
    $stmt->execute();

    echo '<script>
            window.location.replace("http://localhost/tp_final_bbdd/tp_final_bbdd/proyecto/materiaPrima");
        </script>';

class ControladorMateriaPrima
{

    static public function ctrCrearMateriaPrima()
    {
        /* if (
            isset($_POST['materiaP_nombre']) && isset($_POST['materiaP_cant']) &&
            isset($_POST['materiaP_descripcion']) && isset($_POST['materiaP_categoria'])
        ) {

            //inserto articulo
            $tabla_articulo = "articulo";
            $datos_articulo = array(
                "nombre" => $_POST['materiaP_nombre'], "cantidad" => $_POST['materiaP_cant'],
                "unidadMedida" => $_POST['materiaP_unidad_medida'], "descripcion" => $_POST['materiaP_descripcion']
            );

            $respuesta_articulo = ModeloMateriaPrima::mdlIngresarArticulo($tabla_articulo, $datos_articulo);

            //inserto materia prima
            $tabla_materia_prima = "materiaprima";
            $datos_materia_prima = array(
                "idArticulo" => $respuesta_articulo, "nombreCategoria" => $_POST['materiaP_categoria']
            );

            //inserto precioCalidad
            $tabla_materia_prima = "preciocalidad";
            $datos_materia_prima = array(
                "idArticulo" => $respuesta_articulo, "nombreCategoria" => $_POST['materiaP_categoria'],
                "unidadMedida" => $_POST['materiaP_unidad_medida'], "descripcion" => $_POST['materiaP_descripcion_calidad']
            );

            $respuesta_materia_prima = ModeloMateriaPrima::mdlIngresarMateriaPrima($tabla_materia_prima, $datos_materia_prima);
            
            if ($respuesta_materia_prima == "ok") {
                echo ("<script>
                            Swal.fire({
                                title: 'Success!',
                                text: 'Usuario creado con éxito',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>");
            } else {
                echo ("<script>
                            Swal.fire({
                                title: 'Error!',
                                text: 'No se pudo crear usuario, intentalo de nuevo',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        </script>");
            }
        }*/
    }
}

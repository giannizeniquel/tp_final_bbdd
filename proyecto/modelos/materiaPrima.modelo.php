<?php
require_once "conexion.php";

class ModeloMateriaPrima
{

    /* static public function mdlIngresarArticulo($tabla_articulo, $datos_articulo)
    {   
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla_articulo(nombre, cantidad, unidadMedida, descripcion) VALUES (:nombre, :cantidad, :unidadMedida, :descripcion)");
        $stmt->bindParam(":nombre", $datos_articulo["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos_articulo["cantidad"], PDO::PARAM_INT);
        $stmt->bindParam(":unidadMedida", $datos_articulo["unidadMedida"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos_articulo["descripcion"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    static public function mdlIngresarMateriaPrima($tabla_materia_prima, $datos_materia_prima)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla_materia_prima(idArticulo, nombreCategoria, unidadMedida, descripcion) VALUES (:idArticulo, :nombreCategoria, :unidadMedida, :descripcion)");
        $stmt->bindParam(":idArticulo", $datos_materia_prima["idArticulo"], PDO::PARAM_STR);
        $stmt->bindParam(":nombreCategoria", $datos_materia_prima["nombreCategoria"], PDO::PARAM_STR);
        $stmt->bindParam(":unidadMedida", $datos_materia_prima["unidadMedida"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos_materia_prima["descripcion"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt = null;
    } */
}

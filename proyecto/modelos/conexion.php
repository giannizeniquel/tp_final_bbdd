<?php
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;dbname=u203885220_reciplas","u203885220_reciplas","Admin123");
            $link -> exec("set names utf8");
            return $link;
        }
    }
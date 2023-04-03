<?php

class Database{
    public static function conectar(){
        $conexion = new mysqli("192.168.101.7", "root", "123", "notas_master");
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}
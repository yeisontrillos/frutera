<?php

class conexion {

    private $servidor="b3kv6aqvwmi0rrhyy0wf-mysql.services.clever-cloud.com";
    private $usuario="uxmzb3iyhjukului";
    private $contrasenia="cJuOVcSWgM5ZsrbHABwJ";
    private $conexion;

    public function __construct() {

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=b3kv6aqvwmi0rrhyy0wf", $this->usuario, $this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            return "Falla de conexión".$e;
        }

    }

    public function ejecutar($sql) {

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();

    }

    public function consultar ($sql) {

        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();

    }

}

?>
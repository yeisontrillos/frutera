<?php

$objConexion = new conexion();

$productos = "SELECT * FROM producto";
$productos = $objConexion->consultar($productos);

$descuento = "SELECT * FROM oferta INNER JOIN producto ON producto.id = oferta.id_oferta";
$descuento = $objConexion->consultar($descuento);

if ($_POST) {

    if (isset($_POST['seleccionar'])) {

        $id = $_POST['seleccionar'];
        $precio = $_POST['precio'];
        $nombre = $_POST['nombre'];
    }

}

?>
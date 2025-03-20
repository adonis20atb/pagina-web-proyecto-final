<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = 'adonis';
$nombre_bd = 'registro';

$conexion = new mysqli($host, $usuario, $contraseña, $nombre_bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
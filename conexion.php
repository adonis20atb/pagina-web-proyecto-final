<?php
$host = 'localhost'; // o '127.0.0.1'
$usuario = 'root'; // usuario por defecto de XAMPP
$contraseña = 'adonis'; // contraseña por defecto de XAMPP (normalmente está vacía)
$nombre_bd = 'registro'; // reemplaza con el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
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
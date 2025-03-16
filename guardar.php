<?php
// Configuración de la base de datos
$host = '127.0.0.1';
$usuario = 'root'; // usuario por defecto de XAMPP
$contraseña = 'adonis'; // contraseña por defecto de XAMPP (normalmente está vacía)
$nombre_bd = 'registro'; // reemplaza con el nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close(); // Cerrar conexión
?>
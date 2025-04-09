<?php
// Configuración de la base de datos
include("conexion.php");

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['contraseña'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña']; // Guardar la contraseña sin encriptar (no recomendado)

    // Insertar datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    header("Location: index.php");
    exit;
    exit;
    $conexion->close(); // Cerrar conexión
}
?>
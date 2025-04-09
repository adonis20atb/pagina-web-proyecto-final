<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basededatos = "registro";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar
$sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    echo "<h2 style='color:green;font-family:Arial;'>¡Mensaje enviado exitosamente!</h2>";
} else {
    echo "Error al guardar el mensaje: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

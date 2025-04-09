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

// Obtener datos del formulario
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : null;
$correo = isset($_POST['correo']) ? trim($_POST['correo']) : null;
$evento = isset($_POST['evento']) ? trim($_POST['evento']) : null;

// Validar datos
if (empty($nombre) || empty($correo) || empty($evento)) {
    die("Error: Todos los campos son obligatorios.");
}

// Verificar si la tabla existe
$result = $conn->query("SHOW TABLES LIKE 'inscripciones'");
if ($result->num_rows == 0) {
    die("Error: La tabla 'inscripciones' no existe en la base de datos.");
}
$sql = "INSERT INTO inscripciones (nombre, correo, evento) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $evento);

if ($stmt->execute()) {
    echo "<h2>¡Gracias por inscribirte! Te contactaremos pronto.</h2>";
} else {
    echo "Error al guardar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

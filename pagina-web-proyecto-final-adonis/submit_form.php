<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "adonis;
$dbname = "delicious_cookies";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insertar datos en la base de datos
$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado con éxito!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
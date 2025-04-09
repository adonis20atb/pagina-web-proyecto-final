<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "registro"; // Replace with the correct database name

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar el formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $contrasena = isset($_POST['contraseña']) ? $_POST['contraseña'] : '';

    // Evitar inyección SQL
    $usuario = $conn->real_escape_string($usuario);
    $contrasena = $conn->real_escape_string($contrasena);

    // Consulta para verificar usuario y contraseña
    $sql = "SELECT * FROM `usuarios` WHERE `nombre` = '$usuario' AND `contraseña` = '$contrasena'"; // Replace 'nombre_usuario' and 'clave' with your actual column names
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        header("Location: index.php"); // Redirigir a la página de inicio después de iniciar sesión
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iniciodeseccion.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <section id="login" class="login">
    <div class="login-container">
        <form method="POST" action="loginusuario.php">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar Sesión" class="btn-login">
        </form>
        <p>¿No tienes una cuenta? <a href="registar.php">Regístrate aquí</a></p>
    </div>
</section>
</body>
</html>
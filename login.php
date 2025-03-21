<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Verificar credenciales (esto es un ejemplo, deberías usar una base de datos)
    if ($usuario == 'admin' && $contraseña == 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        echo "Credenciales incorrectas.";
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
        <form method="POST" action="login.php">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Iniciar Sesión" class="btn-login">
        </form>
        <p>¿No tienes una cuenta? <a href="registar.php">Regístrate aquí</a></p>
    </div>
</section>
</body>
</html>
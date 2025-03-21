
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regi.css">
    <title>registar</title>
</head>
<body>
<section id="registrar" class="registrar">
    <div class="registrar-container">
        <h1>Registro de Usuario</h1>
        <p>Completa el formulario para crear tu cuenta.</p>
        <form method="POST" action="guardar.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <input type="submit" value="Registrar" class="btn-registrar">
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</section>
</body>
</html>





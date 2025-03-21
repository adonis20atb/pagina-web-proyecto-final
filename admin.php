<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no está autenticado
    exit();
}
?>
<link rel="stylesheet" href="admin.css">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Panel de Administración</title>
</head>
<body>
    <div class="admin-panel">
        <header>
            <h1>Panel de Administración</h1>
            <nav>
                <ul>
                <li><a href="index.php">Inicio</a></li>
            <li><a href="manage_products.php">Gestionar Productos</a></li>
            <li><a href="manage_orders.php">Gestionar Pedidos</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
                </ul>
            </nav>
        </header>
        <section id="usuarios">
            <h2>Gestión de Usuarios</h2>
            <button class="btn">Agregar Usuario</button>
            <input type="text" placeholder="Buscar usuario..." class="search-bar">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se agregarían los usuarios dinámicamente -->
                </tbody>
            </table>
        </section>
        <footer>
            <p>&copy; 2024 deliciues 2025</p>
        </footer>
    </div>
</body>
</html>
</body>
</html>
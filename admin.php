<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no está autenticado
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Panel de Administración</h1>
    <nav>
        <ul>
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="manage_products.php">Gestionar Productos</a></li>
            <li><a href="manage_orders.php">Gestionar Pedidos</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <h2>Bienvenido, Administrador</h2>
    <p>Desde aquí puedes gestionar los productos y pedidos de la tienda.</p>
</body>
</html>
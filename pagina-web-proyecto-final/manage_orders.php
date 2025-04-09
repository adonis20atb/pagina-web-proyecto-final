<?php
session_start();
include("conexion.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: loginusuario.php"); // Redirigir si no está autenticado
    exit();
}

// Obtener pedidos
$result = $conexion->query("SELECT * FROM pedidos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Pedidos</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Gestionar Pedidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Cliente</th>
            <th>Dirección de Envío</th>
            <th>Total</th>
            <th>Fecha</th>
        </tr>
        <?php while ($pedido = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $pedido['id']; ?></td>
            <td><?php echo $pedido['nombre_cliente']; ?></td>
            <td><?php echo $pedido['direccion_envio']; ?></td>
            <td><?php echo $pedido['total']; ?></td>
            <td><?php echo $pedido['fecha']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
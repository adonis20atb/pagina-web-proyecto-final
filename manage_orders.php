<?php
include("conexion.php");
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Mostrar pedidos
$sql = "SELECT * FROM pedidos"; // Asegúrate de tener una tabla de pedidos
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Pedidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gestionar Pedidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre del Cliente</th>
            <th>Productos</th>
            <th>Total</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre_cliente']; ?></td>
            <td><?php echo $row['productos']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td>
                <a href="update_order.php?id=<?php echo $row['id']; ?>">Actualizar</a>
                <a href="delete_order.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
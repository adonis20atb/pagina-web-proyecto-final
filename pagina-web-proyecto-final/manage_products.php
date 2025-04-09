<?php
session_start();
include("conexion.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos


// Agregar un nuevo producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
 

    $sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    $conexion->query($sql);
}

// Obtener productos
$result = $conexion->query("SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Productos</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .header .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .header ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .header ul li {
            margin: 0 15px;
        }
        
        .header ul li a {
            color: black; /* Letras negras */
            font-size: 18px; /* Tamaño más grande */
            font-weight: bold;
            text-decoration: none;
        }

        #menu, label[for="menu"] {
            display: none; /* Ocultar las tres rallitas del menú */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="menu container">
        <a href="#" class="logo" style="color: #7b3f2e;">Delicious Cookies</a>
        <div class="header-buttons">
                <a href="registar.php" class="btn-1">Registrar</a>
                <a href="loginusuario.php" class="btn-1">Iniciar Sesión</a>
            </div>
            <div style="text-align: left; margin-right: 400px;">
                <ul style="display: inline-flex; list-style: none; padding: 0; margin: 0;">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="manage_products.php">Productos</a></li>
                    <li><a href="eventos2.php">Eventos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </header>



</head>
<body><br>
    <h1></h1><br>
    <form method="POST" action="manage_products.php" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 400px; margin: auto;">
        <h2 style="text-align: center; color: #333;">Gestionar Productos</h2>
        <input type="text" name="nombre" placeholder="Nombre del Producto" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;"><br>
        <textarea name="descripcion" placeholder="Descripción" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;"></textarea><br>
        <input type="number" name="precio" placeholder="Precio" required style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;"><br>
        <input type="submit" name="add_product" value="Agregar Producto" style="background-color:rgb(210, 56, 18); color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">
    </form>
<br><br>

   
<body>
    <h1>Lista de Productos</h1>
<table id="tabla">
    <thead>

<th>id </th>
<th>nombre </th>
<th>descripcion</th>
<th>precio</th>

 
    </thead>

<tbody>
   

<?php  
    require_once  'conexion.php' ;
    $consulta= "SELECT * FROM productos";
    if ($resultado=$conexion->query($consulta)){
         while($obj=$resultado->fetch_object())
{ 

?>
<tr>
<td><?php printf($obj-> id);?></td>
<td><?php printf($obj-> nombre);?></td>
<td><?php printf($obj-> descripcion);?></td>
<td><?php printf($obj-> precio);?></td>



<?php  }
$resultado-> Close();
}?>

 

</tbody>
</table>

<style>
table {
  border-collapse: collapse;
}

th, td {
  border: 1px solid rgb(66, 52, 189);
  padding: 5px;
}
</style>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"  ></script>

<script>
let table = new DataTable('#tabla');
</script>

</body>
</html>


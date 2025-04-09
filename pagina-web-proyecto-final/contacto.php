<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Cookies - Tienda de Galletas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
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

        /* Estilos originales */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Roboto', sans-serif; background: #fff8f1; color: #333; }
        .formulario { background: #fcebd5; padding: 60px 20px; text-align: center; }
        .formulario h2 { color: #5e3023; font-size: 32px; margin-bottom: 20px; }
        .formulario form { max-width: 600px; margin: 0 auto; text-align: left; }
        .formulario label { display: block; margin-bottom: 8px; color: #5e3023; font-weight: bold; }
        .formulario input, .formulario textarea {
            width: 100%; padding: 12px; margin-bottom: 20px;
            border: 1px solid #ccc; border-radius: 8px; font-size: 16px;
        }
        .formulario button {
            background: #5e3023; color: #fff;
            padding: 12px 24px; border: none;
            border-radius: 8px; font-size: 16px; cursor: pointer;
            transition: background 0.3s ease;
        }
        .formulario button:hover { background: #7b3f2e; }
        footer { background: #5e3023; color: #fff; padding: 30px 20px; text-align: center; }
        footer p { margin-bottom: 10px; }
        .socials a { margin: 0 10px; color: #f7c59f; text-decoration: none; }
        .socials a:hover { text-decoration: underline; }
        @media (max-width: 600px) {
            .header .menu { flex-direction: column; align-items: flex-start; }
            .header ul { margin-top: 10px; }
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

    <!-- Formulario -->
    <section class="formulario">
        <h2>Contáctanos</h2>
        <form action="contacto2.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

            <button type="submit">Enviar mensaje</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Delicious Cookies. Todos los derechos reservados.</p>
        <div class="socials">

                   <li><a href="https://www.tiktok.com/@deliciuscocup">Instagram</a></li>
                    <li><a href="https://www.facebook.com/Delicious.Cookies1.0/">Facebook</a></li>
                    <li><a href="https://www.tiktok.com/@deliciuscocup">Tiktok</a></li>
        </div>
    </footer>
</body>
</html>

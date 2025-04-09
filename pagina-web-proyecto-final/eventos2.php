<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos | Delicious Cookies</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: #fff8f1;
      color: #333;
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
      color: black;
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
    }

    #menu, label[for="menu"] {
      display: none;
    }

    .hero {
      text-align: center;
      padding: 60px 20px 40px;
    }

    .hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
      color: #5e3023;
    }

    .hero p {
      font-size: 18px;
      color: #7f4f24;
    }

    .eventos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      padding: 40px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-content h3 {
      font-size: 20px;
      color: #5e3023;
      margin-bottom: 10px;
    }

    .card-content p {
      font-size: 14px;
      color: #555;
    }

    .fecha {
      display: inline-block;
      margin-top: 12px;
      padding: 6px 12px;
      background: #f7c59f;
      border-radius: 20px;
      font-size: 13px;
      color: #5e3023;
    }

    .formulario {
      background: #fcebd5;
      padding: 50px 20px;
      text-align: center;
    }

    .formulario h2 {
      color: #5e3023;
      font-size: 28px;
      margin-bottom: 20px;
    }

    .formulario form {
      max-width: 500px;
      margin: 0 auto;
      text-align: left;
    }

    .formulario label {
      display: block;
      margin-bottom: 8px;
      color: #5e3023;
      font-weight: bold;
    }

    .formulario input, .formulario select {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .formulario button {
      background: #5e3023;
      color: #fff;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .formulario button:hover {
      background: #7b3f2e;
    }

    footer {
      background: #5e3023;
      color: #fff;
      padding: 30px 20px;
      text-align: center;
    }

    footer p {
      margin-bottom: 10px;
    }

    .socials a {
      margin: 0 10px;
      color: #f7c59f;
      text-decoration: none;
    }

    .socials a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      .header .menu {
        flex-direction: column;
        align-items: flex-start;
      }

      .hero h1 {
        font-size: 28px;
      }

      .hero p {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>

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

  <section class="hero">
    <h1>Eventos Dulces e Inolvidables</h1>
    <p>Descubre nuestras ferias, degustaciones y talleres exclusivos</p>
  </section>

  <section class="eventos">
    <div class="card">
      <img src="http://localhost/pagina-web-proyecto-final/q.jpg" alt="Evento 1">
      <div class="card-content">
        <h3>Feria de Galletas Artesanales</h3>
        <p>Únete a nosotros en el parque central para una muestra de nuestras mejores creaciones horneadas. ¡Entrada gratuita!</p>
        <span class="fecha">15 Abril 2025</span>
      </div>
    </div>
    
    <div class="card">
      <img src="http://localhost/pagina-web-proyecto-final/2.jpg" alt="Evento 2">
      <div class="card-content">
        <h3>Taller de Decoración</h3>
        <p>Aprende a decorar galletas como un profesional con nuestros chefs expertos. Incluye materiales y degustación.</p>
        <span class="fecha">22 Abril 2025</span>
      </div>
    </div>
    
    <div class="card">
      <img src="http://localhost/pagina-web-proyecto-final/1.jpg" alt="Evento 3">
      <div class="card-content">
        <h3>Noche de Degustación</h3>
        <p>Una experiencia gourmet para los amantes de las galletas. Cupo limitado, reserva ya tu entrada.</p>
        <span class="fecha">30 Abril 2025</span>
      </div>
    </div>
  </section>

  <section class="formulario">
    <h2>¡Inscríbete para participar!</h2>
    <form action="eventos.php" method="POST">
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" name="correo" required>

      <label for="evento">Selecciona el evento</label>
      <select id="evento" name="evento" required>
        <option value="">-- Elige un evento --</option>
        <option value="feria">Feria de Galletas Artesanales</option>
        <option value="taller">Taller de Decoración</option>
        <option value="degustacion">Noche de Degustación</option>
      </select>

      <button type="submit">Enviar inscripción</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Delicious Cookies. Todos los derechos reservados.</p>
    <div class="socials">
  
    <li><a href="https://www.instagram.com/delicious_co_cup/">Instagram</a></li>
                    <li><a href="https://www.facebook.com/Delicious.Cookies1.0/">Facebook</a></li>
                    <li><a href="https://www.tiktok.com/@deliciuscocupb">Tiktok</a></li>
    </div>
  </footer>
</body>
</html>

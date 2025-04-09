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
            color: #7b3f2e; /* Letras color #7b3f2e */
            font-size: 18px; /* Tamaño más grande */
            font-weight: bold;
            text-decoration: none;
        }

        #menu, label[for="menu"] {
            display: none; /* Ocultar las tres rallitas del menú */
        }

        body, h2, h3, p, span, a, li, input, button, label {
            color: #7b3f2e; /* Aplicar color #7b3f2e a todas las letras */
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
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="manage_products.php">Productos</a></li>
                    <li><a href="eventos2.php">Eventos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="#carrito" id="cart-icon" onclick="openCart()" style="color: #7b3f2e;"><i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span></a></li>
                </ul>
            </div>
        </div>
    </header>


    <!-- Sección de Productos -->
     
<section id="productos" class="productos">
    <h2>Nuestros Productos</h2><br>
    <div class="search-filter">
        <input type="text" id="search-bar" placeholder="Buscar productos..." onkeyup="filterProducts()">
        <select id="category-filter" onchange="filterProducts()">
            <option value="all">Todas las Categorías</option>
            <option value="chocolate">Chocolate</option>
            <option value="vainilla">Vainilla</option>
            <option value="veganas">Veganas</option>
            <option value="sin-gluten">Sin Gluten</option>
        </select>
    </div>
    <script>
        function filterProducts() {
            const searchInput = document.getElementById('search-bar').value.toLowerCase();
            const categoryFilter = document.getElementById('category-filter').value;
            const productCards = document.querySelectorAll('.producto-card');

            productCards.forEach(card => {
                const productName = card.querySelector('h3').textContent.toLowerCase();
                const productCategory = card.getAttribute('data-category');

                const matchesSearch = productName.includes(searchInput);
                const matchesCategory = categoryFilter === 'all' || productCategory === categoryFilter;

                if (matchesSearch && matchesCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
    </div>
    <div class="productos-grid">
           
        </div>
    <div class="productos-grid">
        <div class="producto-card" data-category="chocolate">
            <img src="1.jpg" alt="Galletas de Chocolate Chip">
            <h3 style="color: #7b3f2e;">Galletas de Chocolate Chip</h3>
            <p style="color: black;">Clásicas y deliciosas, hechas con trozos de chocolate premium que se derriten en tu boca. Perfectas para cualquier momento del día.</p>
            <span style="color: #7b3f2e;">$50.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas de Chocolate Chip', 50)">Añadir al Carrito</button>
        </div>
        <div class="producto-card" data-category="vainilla">
            <img src="2.jpg" alt="Galletas de Vainilla">
            <h3 style="color: #7b3f2e;">Galletas de Vainilla</h3>
            <p style="color: black;">Suaves y esponjosas, estas galletas son el acompañamiento ideal para tu café o té. Un clásico que nunca pasa de moda.</p>
            <span style="color: #7b3f2e;">$50.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas de Vainilla', 50)">Añadir al Carrito</button>
        </div>
        <div class="producto-card" data-category="veganas">
            <img src="q.jpg" alt="Galletas Veganas">
            <h3 style="color: #7b3f2e;">Galletas Veganas</h3>
            <p style="color: black;">Deliciosas galletas sin ingredientes de origen animal, perfectas para quienes buscan opciones saludables y sabrosas.</p>
            <span style="color: #7b3f2e;">$60.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas Veganas', 60)">Añadir al Carrito</button>
        </div>
        <div class="producto-card" data-category="sin-gluten">
            <img src="3.jpg" alt="Galletas Sin Gluten">
            <h3 style="color: #7b3f2e;">Galletas Sin Gluten</h3>
            <p style="color: black;">Galletas crujientes y sabrosas, elaboradas sin gluten, ideales para quienes tienen intolerancia.</p>
            <span style="color: #7b3f2e;">$70.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas Sin Gluten', 70)">Añadir al Carrito</button>
        </div>
        <div class="producto-card" data-category="chocolate">
            <img src="4.jpg" alt="Galletas de Doble Chocolate">
            <h3 style="color: #7b3f2e;">Galletas de Doble Chocolate</h3>
            <p style="color: black;">Para los amantes del chocolate, estas galletas son una explosión de sabor con chocolate en cada bocado.</p>
            <span style="color: #7b3f2e;">$55.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas de Doble Chocolate', 55)">Añadir al Carrito</button>
        </div>
        <div class="producto-card" data-category="vainilla">
            <img src="5.jpg" alt="Galletas de Vainilla con Chispas de Chocolate">
            <h3 style="color: #7b3f2e;">Galletas de Vainilla con Chispas de Chocolate</h3>
            <p style="color: black;">Una combinación perfecta de vainilla suave y chispas de chocolate, ideales para cualquier ocasión.</p>
            <span style="color: #7b3f2e;">$65.00</span>
            <button class="btn-add-to-cart" style="background-color: #7b3f2e; color: white;" onclick="addToCart('Galletas de Vainilla con Chispas de Chocolate', 65)">Añadir al Carrito</button>
        </div>
    </div>
    
</section>
<div id="cart-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeCart()">&times;</span>
        <h2>Tu Carrito</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="cart-total">0</span></p>
        <button class="btn-1" onclick="openCheckout()">Finalizar Compra</button>
    </div>
</div>

<div id="checkout-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeCheckout()">&times;</span>
        <h2>Detalles de Pago</h2>
        <form id="payment-form">
            <input type="text" placeholder="Nombre Completo" required>
            <input type="text" placeholder="Dirección de Envío" required>
            <input type="text" placeholder="Número de Tarjeta" required>
            <input type="text" placeholder="Fecha de Expiración (MM/AA)" required>
            <input type="text" placeholder="CVV" required>
            <button type="submit" class="btn-1">Confirmar Pago</button>
        </form>
    </div>
</div>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Contacto</h3>
                <ul>
                    <li>Dirección: Las Tres Cruces de Jacagua, sector los frías No. 56</li>
                    <li>Teléfono: +829 325 0390</li>
                    <li>Email: deliciouscookiesycupcakes@gmail.com</li>
                </ul>
            </div>
            <div class="link">
                <h3>Redes Sociales</h3>
                <ul>
                    <li><a href="https://www.instagram.com/delicious_co_cup/">Instagram</a></li>
                    <li><a href="https://www.facebook.com/Delicious.Cookies1.0/">Facebook</a></li>
                    <li><a href="https://www.tiktok.com/@deliciuscocup">Tiktok</a></li>
                
                </ul>
            </div>
        </div>
    </footer>

    <script src="ja.js"></script>
    <div id="chat-icon" onclick="toggleChat()">
        <i class="fas fa-comment"></i>
    </div>
    <div id="chatbot" class="chatbot">
        <div class="chat-header" onclick="toggleChat()">
            <h3>Chat con nosotros</h3>
            <span class="close-chat" onclick="toggleChat()">×</span>
        </div>
        <div class="chat-body" id="chat-body">
            <div class="messages" id="messages"></div>
            <input type="text" id="user-input" placeholder="Escribe un mensaje..." onkeypress="sendMessage(event)">
        </div>
    </div>
</body>
</html>
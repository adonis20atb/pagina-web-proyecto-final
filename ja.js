// Carrito de Compras
let cart = [];
let cartCount = 0;

function addToCart(productName, price) {
    cart.push({ name: productName, price: price });
    cartCount++;
    updateCart();
    showNotification(`${productName} añadido al carrito.`);
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const cartCountElement = document.getElementById('cart-count');

    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        cartItems.appendChild(li);
        total += item.price;
    });

    cartTotal.textContent = total;
    cartCountElement.textContent = cartCount;
}

function openCart() {
    document.getElementById('cart-modal').style.display = 'flex';
}

function closeCart() {
    document.getElementById('cart-modal').style.display = 'none';
}

function checkout() {
    alert('Gracias por tu compra!');
    cart = [];
    cartCount = 0;
    updateCart();
    closeCart();
}

// Notificaciones
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    document.body.appendChild(notification);

    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Formulario de Contacto
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const message = document.getElementById('form-message');
    message.textContent = 'Mensaje enviado con éxito!';
    message.style.color = 'green';
    this.reset();
});
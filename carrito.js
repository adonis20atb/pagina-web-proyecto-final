document.addEventListener("DOMContentLoaded", () => {
    const cartItemsList = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const checkoutButton = document.getElementById("checkout");

    function loadCart() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        cartItemsList.innerHTML = "";
        let total = 0;

        cart.forEach((item, index) => {
            const li = document.createElement("li");
            li.innerHTML = `${item.name} - $${item.price} <button onclick="removeItem(${index})">Eliminar</button>`;
            cartItemsList.appendChild(li);
            total += item.price;
        });

        cartTotal.textContent = total.toFixed(2);
    }

    window.removeItem = (index) => {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        loadCart();
    };

    checkoutButton.addEventListener("click", () => {
        alert("Gracias por tu compra!");
        localStorage.removeItem("cart");
        loadCart();
    });

    loadCart();
});

// Función para agregar productos al carrito desde la página principal
function addToCart(name, price) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({ name, price });
    localStorage.setItem("cart", JSON.stringify(cart));
    alert(`${name} ha sido añadido al carrito.`);
    updateCartCount();
}

// Actualiza el contador del carrito en el icono del menú
function updateCartCount() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    document.getElementById("cart-count").textContent = cart.length;
}

document.addEventListener("DOMContentLoaded", updateCartCount);

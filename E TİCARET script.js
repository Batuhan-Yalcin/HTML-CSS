document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product');
    const cartItems = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    let totalPrice = 0;

    document.getElementById('shop-now').addEventListener('click', () => {
        document.getElementById('products').scrollIntoView({ behavior: 'smooth' });
    });

    products.forEach(product => {
        product.querySelector('.add-to-cart').addEventListener('click', () => {
            const productName = product.getAttribute('data-name');
            const productPrice = parseFloat(product.getAttribute('data-price'));
            const productImage = product.getAttribute('data-image');
            addToCart(productName, productPrice, productImage);
        });
    });

    function addToCart(name, price, image) {
        const cartItem = document.createElement('li');
        cartItem.innerHTML = `<img src="${image}" alt="${name}" class="cart-item-image"> ${name} - ${price} TL`;
        cartItems.appendChild(cartItem);
        totalPrice += price;
        totalPriceElement.textContent = totalPrice.toFixed(2);
    }

    document.getElementById('checkout-form').addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Ödeme Başarılı!');
        cartItems.innerHTML = '';
        totalPrice = 0;
        totalPriceElement.textContent = '0';
    });
});

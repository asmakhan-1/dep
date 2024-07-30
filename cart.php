<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Shopping Cart</h1>

        <div id="cart-items">
            <!-- Cart items will be displayed here dynamically -->
        </div>

        <div class="cart-buttons">
            <button onclick="clearCart()">Clear Cart</button>
            <a href="checkout.php">Proceed to Checkout</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 E-commerce Store. All rights reserved.</p>
    </footer>

    <script>
    // script.js
function addToCart(productId) {
    // AJAX request to addToCart.php
    fetch('addToCart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ product_id: productId }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Display success message (for debugging)
        // Optionally, you can update the UI or redirect to cart.php after success
    })
    .catch(error => {
        console.error('Error adding to cart:', error);
    });
}

    </script>
</body>

</html>
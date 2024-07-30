
// Example JavaScript for adding products to cart (using AJAX for real-time updates)
function addToCart(productId) {
    
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
            alert(data.message); // Display success message
        })
        .catch(error => {
            console.error('Error adding to cart:', error);
        });
    }
    
}

function clearCart() {
    // Implement logic to clear cart (e.g., reset session or database)
    alert('Cart cleared');
}


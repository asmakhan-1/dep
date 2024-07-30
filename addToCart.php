// addToCart.php
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];

    // Simulate adding product to session cart (replace with actual logic)
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $productId;

    // Return success response
    echo json_encode(['message' => 'Product added to cart']);
} else {
    // Handle invalid request
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request']);
}
?>

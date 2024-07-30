<?php
session_start();

// Example: Fetch product details from database based on session cart items
// Simulate data (replace with actual database fetch)
$cartItems = [];

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    include 'config.php'; // Adjust path as per your setup

    $cartIds = implode(',', $_SESSION['cart']);
    $sql = "SELECT * FROM products WHERE id IN ($cartIds)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cartItems[] = [
                'name' => $row['name'],
                'price' => $row['price'],
                // Add more details as needed
            ];
        }
    }
}

// Return cart items as JSON
echo json_encode($cartItems);
?>

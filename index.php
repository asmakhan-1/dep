<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-commerce Website</title>
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
        <h1>Products</h1>
        
        <div class="category">
            <h2>Shoes</h2>
            <div class="category">
            <h2>Shoes</h2>
            <ul class="products-list">
                <li class="product-item">
                    <img src="graphics/download.jpg" alt="Running Shoes">
                    <div>
                        <span>Running Shoes</span>
                        <span>$99.99</span>
                        <button onclick="addToCart(1)">Add to Cart</button>
                    </div>
                </li>
                <!-- Add more products as needed -->
            </ul>
            <?php displayProducts('Shoes'); ?>
        </div>
        
        <div class="category">
            <h2>Hoodies</h2>
            <?php displayProducts('Hoodies'); ?>
        </div>
        
        <div class="category">
            <h2>Shirts</h2>
            <?php displayProducts('Shirts'); ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 E-commerce Store. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Function to display products based on category
function displayProducts($category) {
    include 'config.php';
    $sql = "SELECT * FROM products WHERE category = '$category'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<ul>';
        while($row = $result->fetch_assoc()) {
            echo '<li>';
            echo '<span>' . $row['name'] . '</span>';
            echo '<span>$' . $row['price'] . '</span>';
            echo '<button onclick="addToCart(' . $row['id'] . ')">Add to Cart</button>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo 'No products found.';
    }

    $conn->close();
}
?>

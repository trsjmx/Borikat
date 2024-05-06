<?php
session_start();
require 'registration.php'; // This assumes you have a separate database connection setup file.

// Check if product ID and price are set
if (isset($_POST['product_id']) && isset($_POST['price'])) {
    $productId = $_POST['product_id'];
    $price = $_POST['price'];

    // Check if the product exists in the database
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product exists, add to cart
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = ['quantity' => 1, 'price' => $price];
        } else {
            $_SESSION['cart'][$productId]['quantity'] += 1;
        }

        $totalItems = array_sum(array_column($_SESSION['cart'], 'quantity'));
        echo json_encode(['cartCount' => $totalItems]);
    } else {
        echo json_encode(['error' => 'Product not found']);
    }

    $stmt->close();
} else {
    echo json_encode(['error' => 'Product ID or price missing']);
}

$conn->close();
?>
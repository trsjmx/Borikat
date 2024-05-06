<?php
// Start or resume the session
session_start();

// Check if the cart exists in the session
if (isset($_SESSION['cart'])) {
    // Calculate the total number of items in the cart
    $cartCount = count($_SESSION['cart']);
} else {
    // If the cart doesn't exist or is empty, set the count to 0
    $cartCount = 0;
}

// Prepare the response as JSON
$response = [
    'cartCount' => $cartCount
];

// Set the content type header to JSON
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
?>

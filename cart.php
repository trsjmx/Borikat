<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>السلة</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style/cart.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "navbar.php"; ?>

<main class="page">
    <section class="shopping-cart">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="items">
                            <?php
                            // Check if session is not started before calling session_start()
                            if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }

                            // Connect to the database
                            // Update your database connection details accordingly
                            $conn = new mysqli("localhost", "root", "Tt08111190912", "CS314");
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $totalAmount = 0;
                            $totalItems = 0;

                            if (!empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $product_id => $details) {
                                    // Fetch product details from the database
                                    $sql = "SELECT id, name, price, image_url FROM products WHERE id = ?";
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param("i", $product_id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<div class="product">';
                                            echo '<div class="row">';
                                            echo '<div class="col-md-3">';
                                            echo '<img class="img-fluid mx-auto d-block image" src="'. htmlspecialchars($row['image_url']) .'" alt="Product Image">';
                                            echo '</div>';
                                            echo '<div class="col-md-8">';
                                            echo '<div class="info">';
                                            echo '<div class="row">';
                                            echo '<div class="col-md-5 product-name">';
                                            echo '<a href="productDetails.php" style="color: #7E8D6B;">' . htmlspecialchars($row['name']) . '</a>';
                                            echo '</div>';
                                            echo '<div class="col-md-4 quantity">';
                                            echo '<label for="quantity'.$product_id.'">الكمية:</label>';
                                            echo '<input id="quantity'.$product_id.'" type="number" value="'.$details['quantity'].'" class="form-control quantity-input" onchange="updateQuantity('.$product_id.', this.value)" data-old-value="'.$details['quantity'].'">'; 
                                            echo '</div>';
                                            echo '<div class="col-md-3 price">';
                                            echo '<span id="initial_price'.$product_id.'" style="display: none;">'.htmlspecialchars($row['price']).'</span>';
                                            echo '<span id="price'.$product_id.'">'.number_format($row['price'] * $details['quantity'], 2).' SAR</span>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';

                                            // Update total amount for each item
                                            $totalAmount += ($row['price'] * $details['quantity']);
                                            $totalItems += $details['quantity'];
                                        }
                                    } else {
                                        echo '<p>Product not found.</p>';
                                    }
                                }
                            } else {
                                echo '<p>السلة فارغة</p>';
                            }
                            $conn->close();
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>الملخص</h3>
                            <div class="summary-item"><span class="text">المجموع الفرعي</span><span id="totalAmount" class="price"><?php echo number_format($totalAmount, 2); ?> SAR</span></div>
                            <div class="summary-item"><span class="text">التخفيض</span><span class="price">0 SAR</span></div>
                            <div class="summary-item"><span class="text">الشحن</span><span class="price">25 SAR</span></div>
                            <div class="summary-item"><span the="text">المجموع</span><span id="totalWithShipping" class="price"><?php echo number_format($totalAmount + 25, 2); ?> SAR</span></div>
                            <div id="paypal-container-T2UJP34KC4ETL"></div>
                                <script
                                src="https://www.paypal.com/sdk/js?client-id=AWnqv2ShdAyLRj8I2GYqLChZEYjaDhUyRXvTVpLL_sVehWAXW0Jwqgwy2xCmEj5nDpHhM15Oqvighoav"
                                ></script>
                                <script> paypal.Buttons().render("#paypal-container-T2UJP34KC4ETL"); </script>                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <?php include "footer.php"; ?>
</footer>
<script>
    function updateQuantity(productId, newValue) {
        // Make sure newValue is a positive integer
        newValue = Math.max(0, parseInt(newValue));

        // Update the input value
        document.getElementById('quantity' + productId).value = newValue;

        // Get the initial price and quantity
        var initialPrice = parseFloat(document.getElementById('initial_price' + productId).innerHTML);
        var oldQuantity = parseInt(document.getElementById('quantity' + productId).getAttribute('data-old-value'));

        // Update the price for this product
        var newPrice = newValue * initialPrice;
        document.getElementById('price' + productId).innerHTML = newPrice.toFixed(2) + ' SAR';

        // Update the total amount and total items in the summary
        var totalAmount = 0;
        var totalItems = 0;
        var items = document.getElementsByClassName('product');
        for (var i = 0; i < items.length; i++) {
            var priceElement = items[i].getElementsByClassName('price')[0];
            var priceText = priceElement.textContent.trim();
            console.log("Price Text:", priceText);
            var price = parseFloat(priceText.replace(' SAR', '')).toFixed(1); // Round to two decimal places
            var quantityInput = items[i].getElementsByClassName('quantity-input')[0];
            var quantity = parseInt(quantityInput.value);
            console.log("Price:", price, "Quantity:", quantity);
            totalAmount += price * quantity;
            totalItems += quantity;
        }
        document.getElementById('totalAmount').innerHTML = totalAmount.toFixed(2) + ' SAR';

        // Update the total amount including shipping
        var totalWithShipping = totalAmount + 25;
        document.getElementById('totalWithShipping').innerHTML = totalWithShipping.toFixed(2) + ' SAR';
    }

    
        
</script>

</body>
</html>

<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/market.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .user-dropdown {
            position: relative;
            display: inline-block;
            margin-left: 40px;
        }

        .user-button {
            background-color: white; 
            border: none;
            color: #5C4A56;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 30px;
        }

        .user-button:hover {
            background-color: #9c8092;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #5c4a56c0;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
            border-radius: 10px; 
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #9c8092;
            border-radius: 10px; 
        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">الرئيسية</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            معالم
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="landmarks.php">مساجد</a>
                            <a class="dropdown-item" href="sites and wells.php">مواقع وأبار</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Restaurants & Cafes.php">مطاعم ومقاهي</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            أنشطة وترفيه
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="museums.php">متاحف ومراكز</a>
                            <a class="dropdown-item" href="palm.php">مزارع</a>
                            <a class="dropdown-item" href="hourses.php">مرابط خيل</a>
                            <a class="dropdown-item" href="play.php">ملاهي ألعاب</a>
                            <a class="dropdown-item" href="mall.php">أسواق ومولات</a>
                            <a class="dropdown-item" href="park.php">حدائق ومنتزهات</a>
                            <a class="dropdown-item" href="path.php">مماشي</a>
                            <a class="dropdown-item" href="cinema.php">سينما</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="market.php"> <b>متجر بوركت</b>  </a>
                    </li>
                </ul>
            </div>
            <?php
            if (isset($_SESSION["id"]) && isset($_SESSION["name"])) {
                // User is logged in, show the user icon
                echo '<div class="user-dropdown">
                        <button class="user-button">
                            <i class="fas fa-user"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="profile.php">الملف الشخصي</a>
                            <a href="logout.php">تسجيل الخروج</a>
                        </div>
                    </div>';
            } 
            ?>
            <div class="col-lg-1">
            <div class="nav-btns ms-auto">
                <a href="cart.php" class="btn position-relative btn-white">
                    <i class="fa fa-shopping-cart" style="color: white;"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-red cart-count">0</span>
                </a>
            </div>

            </div>
        </div>
    </nav>
 
    <script>
        // Function to fetch and update cart count
    function updateCartCount() {
            fetch('get_cart_count.php') // Replace with the actual endpoint to fetch cart count
                .then(response => response.json())
                .then(data => {
                    const cartCountElement = document.querySelector('.cart-count');
                    if (cartCountElement) {
                        cartCountElement.textContent = data.cartCount;
                        console.log("Cart count updated to:", data.cartCount);
                    } else {
                        console.error('Cart count element not found.');
                    }
                })
                .catch(error => console.error('Error fetching cart count:', error));
        }

        // Call the function when the page loads
        window.addEventListener('load', updateCartCount);

        // Function to add item to cart
        function addToCart(productId, price) {
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `product_id=${productId}&price=${price}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    alert('Item added to cart');
                    // Update cart count after adding an item
                    updateCartCount();
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>

    
    

    
</body>
</html>

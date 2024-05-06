
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
     <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>المتجر | بوركت</title>
</head>
<body>
    <?php  include "navbar.php" ?>
 
    <!-- header -->
    <header id="header" class="vh-90 carousel slide position-relative" data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="carousel-inner position-relative">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="text-center text-white">
                    <h1 style="font-family: 'Almadinah3'; font-size: 4rem;">من المدينة المنورة إلى العالم</h1>
                    <h2 class="py-1" style = "font-size: 1.5rem;"">متجر بوركت للهدايا التذكارية</h2>
                    <a href="#special" class="btn mt-3 text-uppercase" style="background-color: #5C4A56; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; text-decoration: none;"> تسوق الآن</a>
                </div>
            </div>
        </div>
    </header>

    
    
    <!-- end of header -->
    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"> متجر بوركت  </a>
      </li>
    </ul>
     <!-- special products -->
    <section id = "special" class = "py-1">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block" >المنتجات</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                    <a href="productDetails.php" style="cursor: pointer;" > 
                        <img src="images/product2.png" class="w-100">
                    </a> 
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">باب المسجد النبوي (تعليقة مفاتيح)</p>
                        <span class = "fw-bold d-block">40 SAR</span>
                        <a href="<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(1, 40);">إضافة إلى السلة</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product1.png" class = "w-100">  
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">المحراب النبوي الشريف (تعليقة مفاتيح)</p>
                        <span class = "fw-bold d-block">40 SAR</span>
                        <a href="<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(2, 40);">إضافة إلى السلة</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product10.png" class = "w-100">
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">ميدالية روح المدينة</p>
                        <span class = "fw-bold d-block">40 SAR</span>
                        <a href="<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(3, 40);">إضافة إلى السلة</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product12.jpg" class = "w-100">
                        
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">ملصق المسجد النبوي</p>
                        <span class = "fw-bold d-block">10 SAR</span>
                        <a href="<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(4, 10);">إضافة إلى السلة</a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product4.png" class = "w-100">
                        
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">مجموعة روح (دبوس)</p>
                        <span class = "fw-bold d-block">75 SAR</span>
                        <a href = "<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(5, 75);" class = "btn btn-primary mt-3">إضافة إلى السلة</a>
                    </div>
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product5.png" class = "w-100">
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">مجموعة ريحان (دبوس) </p>
                        <span class = "fw-bold d-block">75 SAR</span>
                        <a href = "<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(6, 75);" class = "btn btn-primary mt-3">إضافة إلى السلة</a>
                    </div>
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product7.png" class = "w-100">
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">دبوس النجمة الثمانية</p>
                        <span class = "fw-bold d-block">30 SAR</span>
                        <a href = "<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(7, 30);" class = "btn btn-primary mt-3">إضافة إلى السلة</a>
                    </div>
                </div>
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src = "images/product9.jpg" class = "w-100">
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">سوار النجمة الثمانية </p>
                        <span class = "fw-bold d-block">55 SAR</span>
                        <a href = "<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-primary mt-3" onclick="addToCart(8, 55);" class = "btn btn-primary mt-3">إضافة إلى السلة</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->

    <script>
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
               
            }
        })
        .catch(error => console.error('Error:', error));
    }

    
    
    </script>

    
    <footer>
        <!-- Include the footer content using PHP include -->
        <?php include "footer.php"; ?>
    </footer>
    
</body>
</html>

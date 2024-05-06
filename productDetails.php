<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/market.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>المتجر | بوركت</title>
</head>
<body>
    <?php include "navbar.php"; ?>

    <ul class="breadcrumbs" style="margin-top: 3%;">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>
      <li class="breadcrumbs_item">
        <a href="market.php" class="breadcrumbs_link "> متجر بوركت  </a>
      </li>
      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"> تفاصيل المنتج </a>
      </li>
    </ul>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/product2.png" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder" style="font-size:35px;">باب المسجد النبوي (تعليقة مفاتيح)</h1>
                    <div class="fs-5 mb-5">
                        <span>40.00 SAR</span>
                    </div>
                    <p class="lead">، قطعة مميزة لباب المسجد النبوي الشريف
                    تعليقة مفاتيح أو تعليقة سيارة
                    معدن زنك بارز من الجهتين - ذهبي فاتح</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem " />
                        <a href="<?php echo isset($_SESSION['id']) ? 'cart.php' : 'login.php'; ?>" class="btn btn-outline-dark flex-shrink-0" type="button" style="background-color:  #7E8D6B; color: white; border: none;  margin-right:15px" onclick="addToCart(1, 40);">
                            <i class="bi-cart-fill me-1"></i>
                            إضافة إلى السلة
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
    
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
                const cartCountElement = document.querySelector('.cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cartCount;
                } else {
                    console.error('Cart count element not found.');
                }
            }
        })
        .catch(error => console.error('Error:', error));
    }
    </script>
</body>
</html>
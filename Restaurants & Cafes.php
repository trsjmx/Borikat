<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/Restaurants & Cafes.css" />
    <link rel="icon" href="images/Group green.svg" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap");
    </style>
    <title>المطاعم والمقاهي| بوركت</title>
  </head>
  <body>
    <?php include "<projHeader>.php"; ?>
    <div class="banner">
      <img src="images/ward2.jpg" alt="header" class="headerImg" />
      <div class="headerText">
        <h1>مطاعم ومقاهي المدينة  </h1>
        <p>
         مجموعة مميزة من المطاعم والمقاهي المدينية التي تقدم تجارب منوعة ومختلفة.
        </p>
      </div>
    </div>

    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active">مطاعم ومقاهي  </a>
      </li>
    </ul>

        </div>

    
    <div class="section3">
        
        
            <div class="section3-images" >
                <div class="restaurant-box">
                    <img src="images/memas.png" alt="Restaurant 1">
                    <div class="overlay-re"></div>
                    <div class="restaurant-info">
                        <h3>مطعم ميماز</h3>
                        <p>التقييم: 4.7</p>
                        <p>الموقع: طريق الملك عبدالله</p>
                        <a href="Memaz.php" class="read-more">
                            المزيد <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>

                <div class="restaurant-box">
                    <img src="images/avan.png" alt="Restaurant 2">
                    <div class="overlay-re"></div>
                    <div class="restaurant-info">
                        <h3>مطعم أفنجارديا</h3>
                        <p>التقييم: 4.1</p>
                        <p>الموقع: بوليفارد قباء</p>
                        <a href="Avanguardia.php" class="read-more">
                            المزيد <i class="fas fa-chevron-left"></i> 
                        </a>
                    </div>
                </div>
                <div class="restaurant-box">
                    <img src="images/ward.png" alt="Restaurant 3">
                    <div class="overlay-re"></div>
                    <div class="restaurant-info">
                        <h3>مطعم بيت ورد</h3>
                        <p>التقييم: 4.1</p>
                        <p>الموقع: بوليفارد العروبة</p>
                        <a href="Beit ward.php" class="read-more">
                            المزيد <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
                
             </div>
    </div>

    <footer>
      <?php include "footer.php"; ?>
    </footer>
  </body>
</html>
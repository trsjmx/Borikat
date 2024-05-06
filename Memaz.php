<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/MemazRestaurant.css" />
    <link rel="icon" href="images/Group green.svg" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap");
    </style>
    <title> Memaz Restaurant  </title>
  </head>
  <body>
     <?php include "<projHeader>.php"; ?>

    <div class="banner"> 
      <img src="images/memaz.png" alt="header" class="headerImg" />
    </div>


    
    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="Restaurants & Cafes.php" class="breadcrumbs_link">مطاعم ومقاهي  </a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"
          > مطعم  ميماز    </a
        >
      </li>
    </ul>
    <div class="Restaurant">
      <div class="Restaurant-description">
        <br>
        <h1>  مطعم  ميماز  </h1>
        <br/>
        <br/>
      </div>
      <div class="Quba-icons">
        <button
          class="button"
          onclick="window.location.href='https://maps.app.goo.gl/g1P3Tf7CDJbskeAN6'"
        >
          <img src="images/g198.svg" alt="Map" />
        </button>

       
      </div>
    </div>

    <div class="Restaurant-pragraph">
      <p>
        مطعم ومقهى ميماز هو مطعم متوسطي ولبناني رائع يقع على طريق الملك عبد الله الفرعي في المدينة المنورة. يقدمون مجموعة رائعة من السلطات والحساء والبيتزا والمشاوي والحلويات اللذيذة مع خدمة عملاء رائعة في بيئة جميلة.


      </p>
      <h1> مطبخ المطعم  </h1>
      <p> لبناني - تركي
      <h1> مرافق المطعم    </h1>
      <p>
        مواقف سيارات - جلسات خارجية - جلسات عوائل - جلسات أفراد
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br><br><br><br>
    <div class="reviews">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-1a763464-1482-40a8-85e0-2a0727aba251" data-elfsight-app-lazy></div>
    </div>
    <br />
    <br />
  </body>
</html>
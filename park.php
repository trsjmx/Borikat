<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
     <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap');
    </style>
    <title>   حدائق ومنتزهات | بوركت  </title>

</head>

<body>
<?php include "projHeader.php"; ?>

<div class="section1">
        <img src="images2\park0.png" alt="header" class="image1">
        <h2>حدائق ومنتزهات المدينة</h2>
        <p>تسوق في الأسواق التقليدية أو المولات لتجربة تسوق ممتعة ومتنوعة</p>
    </div>

    <ul class="section2">
        <li class="section2_item">
          <a href="index.php" class="section2_link">الرئيسية</a>
        </li>
  
        <li class="section2_item">
          <a href="" class="section2_link section2_link--active">  حدائق ومنتوهات </a>
        </li>
      </ul>
    

   
<div class="container">
   
   <div class="section3-content">
    <img src="images2\park2.png" alt="museum1" class="section3-image" />
    <div class="section3-icons">
      <button
        class="button"
        onclick="window.location.href='https://www.google.com/maps/place/%D8%AC%D8%A7%D8%AF%D8%A9+%D9%82%D8%A8%D8%A7%D8%A1%E2%80%AD/@24.4450472,39.6146503,15z/data=!4m2!3m1!1s0x0:0x30a86b5775ec415c?sa=X&ved=1t:2428&ictx=111'"
      >
        <img src="images2\g198.png" alt="Map" />
      </button>
  
      
    </div>
   
    <div class="section3">
        <h3> حديقة الأمير محمد</h3>
        <p>  حديقة عائلية بجوار جبل أحد  </p>
        <a href="parkInfo.php" class="read-more">
        المزيد <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    </div>
</div>
<?php include "footer.php"?>

    
</body>
</html>

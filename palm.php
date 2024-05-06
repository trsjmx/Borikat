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
    <title>مزارع | بوركت</title>

</head>

<body>
<?php include "projHeader.php"; ?>

<div class="section1">
        <img src="images2\palm.png" alt="header" class="image1">
        <h2>مزارع المدينة</h2>
        <p>تجربة فريدة تجمع بين جمال الطبيعة وسحر نخيل المدينة</p>
    </div>

    <ul class="section2">
        <li class="section2_item">
          <a href="index.php" class="section2_link">الرئيسية</a>
        </li>
  
        <li class="section2_item">
          <a href="" class="section2_link section2_link--active"> مرازع </a>
        </li>
      </ul>
    

   
<div class="container">
   
   <div class="section3-content">
    <img src="images2\palm0.png" alt="museum1" class="section3-image" />
    <div class="section3-icons">
      <button
        class="button"
        onclick="window.location.href='https://www.google.com/maps?ll=24.438224,39.610697&z=14&t=m&hl=ar&gl=SA&mapclient=embed&cid=7550015683493755470 '"
      >
        <img src="images2\g198.png" alt="Map" />
      </button>
  
     
    </div>
   
    <div class="section3">
        <h3> رو المزرعة</h3>
        <p>مرزعة ومقهى </p>
        <a href="palmInfo.php" class="read-more">
        المزيد <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    </div>
</div>
    
<?php include "footer.php"?>

</body>
</html>

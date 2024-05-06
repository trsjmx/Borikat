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
    <title>سينما | بوركت</title>

</head>

<body>
<?php include "projHeader.php"; ?>

<div class="section1">
        <img src="images2\cinema1.png" alt="header" class="image1">
        <h2>سينما المدينة</h2>
        <p>استمتع بمشاهدة أحدث الأفلام في سينما المدينة</p>
    </div>

    <ul class="section2">
        <li class="section2_item">
          <a href="index.php" class="section2_link">الرئيسية</a>
        </li>
  
        <li class="section2_item">
          <a href="" class="section2_link section2_link--active">  سينما </a>
        </li>
      </ul>
    

   
<div class="container">
   
   <div class="section3-content">
    <img src="images2\cinema2.png" alt="museum1" class="section3-image" />
    <div class="section3-icons">
      <button
        class="button"
        onclick="window.location.href='https://www.google.com/maps/place/Empire+Cinema+%D8%A7%D9%85%D8%A8%D8%A7%D9%8A%D8%B1+%D8%B3%D9%8A%D9%86%D9%85%D8%A7%E2%80%AD/@24.4884534,39.6494699,15z/data=!4m6!3m5!1s0x15bdbf398e09d68b:0x54e5814355e4ab9b!8m2!3d24.4884534!4d39.6494699!16s%2Fg%2F11t9v3gdbw?entry=ttu'"
      >
        <img src="images2\g198.png" alt="Map" />
      </button>
  

    </div>
   
    <div class="section3">
        <h3> امباير سينما </h3>
        <p> دار سينما </p>
        <a href="cinemaInfo.php" class="read-more">
        المزيد <i class="fas fa-chevron-left"></i>
        </a>
    </div>
    </div>
</div>
    
<?php include "footer.php"?>

</body>
</html>

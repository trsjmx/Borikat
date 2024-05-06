<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/landmarks1.css" />
    <link rel="icon" href="images/Group green.svg" type="image/png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap");
    </style>
    <title>مواقع وآبار | بوركت</title>
  </head>
  <body>
    <div class="banner">
      <img src="images/Site.png" alt="header" class="headerImg" />
      <div class="headerText">
        <h1>مواقع وآبار</h1>
        <p>
          المواقع التاريخية والآبار في المدينة بروعة تاريخها العظيم وتعبيرها عن
          الثقافة الإسلامية
        </p>
      </div>
    </div>
    <?php include "<projHeader>.php"; ?>
    <ul class="breadcrumbs">
      <li class="breadcrumbs_item">
        <a href="index.php" class="breadcrumbs_link">الرئيسية</a>
      </li>

      <li class="breadcrumbs_item">
        <a href="" class="breadcrumbs_link breadcrumbs_link--active"
          >مواقع وآبار</a
        >
      </li>
    </ul>

    <div class="container">
      <div class="card1">
        <img src="images/Qars1.png" alt="Well" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps/place/%D8%A8%D8%A6%D8%B1+%D8%BA%D8%B1%D8%B3%E2%80%AD/@24.445186,39.627203,14z/data=!4m6!3m5!1s0x15bdbf95c9b0511b:0xdfed1dd10f44ce20!8m2!3d24.4451861!4d39.6272027!16s%2Fg%2F12195n4m?hl=ar&entry=ttu '"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>

          <button
            class="button"
            onclick="window.location.href='https://panoraven.com/en/embed/0cb4DSQVjI' "
          >
            <img src="images/360-degree 1.svg" alt="360 View" />
          </button>
        </div>

        <div class="card-description">
          <h2>بئر غرس</h2>
          <p>
            من الآبار التي توضأ منها الرسول وشرب منها، وأوصى أن يغسل من مائها.
          </p>
          <a href="Qars well.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Athaq1.png" alt="Well" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps/place/%D8%A8%D8%B3%D8%AA%D8%A7%D9%86+%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%B8%D9%84+%D9%88%D8%A8%D8%A6%D8%B1+%D8%B9%D8%B0%D9%82%E2%80%AD/@24.439547,39.615384,16z/data=!4m6!3m5!1s0x15bdbf8483753d19:0x6c031c507a2896c6!8m2!3d24.4395466!4d39.6153838!16s%2Fg%2F11f5g6b9mk?hl=ar&entry=ttu'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>بئر عذق</h2>
          <p>
            نزل النبي ﷺ عند هذه البئر أول قدومه إلى المدينة المنورة مهاجرًا من
            مكة.
          </p>
          <a href="Athaq Well.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/khatm.png" alt="Mosque" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.438919,39.616635&z=12&t=m&hl=ar&gl=US&mapclient=embed&cid=10093878104872697150'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>بئر الخاتم</h2>
          <p>
            شرب منها النبي ﷺ، وبشر عندها أبا بكر وعمر وعثمان بالجنة، واحتضنت
            خاتم النبي ﷺ.
          </p>
          <a href="Khatm well.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Ahan.png" alt="Well" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.438003,39.629632&z=16&t=m&hl=ar&gl=US&mapclient=embed&cid=7935573935625967380'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>بئر العهن</h2>
          <p>
            من الآبار النبوية التي ارتبطت بسيرة النبي ﷺ، فقد مرّ عليها، وتوضأ
            بمائها، وغيَّر اسمها من العسيرة الى اليسيرة .
          </p>
          <a href="Ahan well.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Khandaq.png" alt="Site" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.476863,39.595429&z=19&t=m&hl=ar&gl=SA&mapclient=embed&cid=3923701800114717456'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>الخندق</h2>
          <p>
            بقعة مهيبة اكتنزت أشد اللحظات على رسول الله وصحابته الكرام، وظهر
            فيها صدق إيمان الصحابة رضي الله عنهم .
          </p>
          <a href="Khandaq.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Baqi.png" alt="Site" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.467091,39.61636&z=16&t=m&hl=ar&gl=SA&mapclient=embed&cid=3189697597700625474'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>

          <button
            class="button"
            onclick="window.location.href='https://panoraven.com/en/embed/364aFRvKmx'"
          >
            <img src="images/360-degree 1.svg" alt="360 View" />
          </button>
        </div>

        <div class="card-description">
          <h2>بقيع الغرقد</h2>
          <p>
            اختارها النبي ﷺ لتكون أول منازل الآخرة لأصحابه، فيها يدفنون ومنها
            يحشرون، فدفن فيها 10 آلاف من أصحابه الكرام.
          </p>
          <a href="Baqi.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Uhud.png" alt="Site" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.52231,39.622579&z=15&t=m&hl=ar&gl=SA&mapclient=embed&q=%D8%AC%D8%A8%D9%84+%D8%A3%D8%AD%D8%AF+%D8%A7%D9%84%D9%85%D8%AF%D9%8A%D9%86%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D9%88%D8%B1%D8%A9'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>جبل أحد</h2>
          <p>
            جبل مَهيب له مكانة خاصة عند رسولنا الكريم، فقد قال ﷺ: (أُحدٌ جبلٌ
            يُحِبُّنَا ونُحِبُّهُ).
          </p>
          <a href="Uhud.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>

      <div class="card1">
        <img src="images/Rumah.png" alt="Site" class="card1-image" />
        <div class="card1-icons">
          <button
            class="button"
            onclick="window.location.href='https://www.google.com/maps?ll=24.502071,39.612284&z=14&t=m&hl=ar&gl=US&mapclient=embed&q=%D8%AC%D8%A8%D9%84+%D8%A7%D9%84%D8%B1%D9%85%D8%A7%D8%A9+%D8%B3%D9%8A%D8%AF+%D8%A7%D9%84%D8%B4%D9%87%D8%AF%D8%A7%D8%A1+%D8%A7%D9%84%D9%85%D8%AF%D9%8A%D9%86%D8%A9+%D8%A7%D9%84%D9%85%D9%86%D9%88%D8%B1%D8%A9+42321+%D8%A7%D9%84%D9%85%D9%85%D9%84%D9%83%D8%A9+%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9+%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9'"
          >
            <img src="images/g198.svg" alt="Map" />
          </button>
        </div>

        <div class="card-description">
          <h2>جبل الرماة</h2>
          <p>
            الجبل الذي أمر النبي الرماة أن يتمركزوا فيه في غزوة أحد ، وكان عددهم
            خمسين رجلاً، ليحموا ظهور المسلمين من تسلل المشركين.
          </p>
          <a href="Rumah.php" class="read-more">
            المزيد <i class="fas fa-chevron-left"></i>
          </a>
        </div>
      </div>
    </div>
    <br />
    <br />

    <footer>
      <?php include "footer.php"; ?>
    </footer>
  </body>
</html>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link rel="stylesheet" href="style/index.css">
        <!-- Include Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap');
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-button {
            background-color: white; 
            border: none;
            color: #5C4A56;
            padding: 16px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 30px;
            margin-right:400% ;

        }

        .user-button:hover {
            background-color: #9c8092;
        }

        .user-icon {
            color: white;
            font-size: 20px;
        }

        .user-dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #5c4a56c0;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            right: 0;
            margin-right:400% ;
            border-radius: 1vw;


        }

        .user-dropdown .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .user-dropdown .dropdown-content a:hover {
            background-color: #9c8092;
            border-radius: 1vw;

        }

        .user-dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <title>الرئيسية | بوركت</title>

</head>
<body>
    
    <div class="navbar">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li class="dropdown-li">
                <a href="#">معالم <span class="arrow"></span></a>
                <ul class="dropdown">
                    <li><a href="landmarks.php">مساجد</a></li>
                    <li><a href="sites and wells.php">مواقع وأبار</a></li>
                </ul>
            </li>
            <li><a href="Restaurants & Cafes.php">مطاعم ومقاهي </a></li>
            <li class="dropdown-li">
                <a href="#">أنشطة وترفيه <span class="arrow"></span></a>
                <ul class="dropdown">
                    <li><a href="museums.php">متاحف ومراكز</a></li>
                    <li><a href="palm.php">مزارع </a></li>
                    <li><a href="hourses.php">مرابط خيل </a></li>
                    <li><a href="play.php">ملاهي ألعاب</a></li>
                    <li><a href="mall.php">أسواق ومولات</a></li>
                    <li><a href="park.php">حدائق ومنتزهات</a></li>
                    <li><a href="path.php">مماشي</a></li>
                    <li><a href="cinema.php">سينما</a></li>
                </ul>
            </li>
            
            <li><a href="market.php">متجر بوركت</a></li>
        </ul>


        <!-- User Dropdown Button -->
        <div class="user-dropdown">
            <button class="user-button">
                <i class="fas fa-user" ></i> <!-- Font Awesome user icon -->
            </button>
            <div class="dropdown-content">
                <a href="#">الملف الشخصي</a>
                <a href="logout.php">تسجيل الخروج</a>
            </div>
        </div>
        <img src="images/logo.svg" class="logo">

    </div>  


    
    <div class="banner">
        <img src="images/header.png" alt="header" class="headerImg"> 
        <div class="headerText">
            <h2>فقالوا إن أردت صفاء الروح</h2>
            <h1>فداوِ قلبكَ بالمدينة</h1>   
            <p>دليلك لتجربة سياحية ممتعة في المدينة المنورة</p>
        </div>
        <div class="headerButtons">
            <a href="#section1"  class="priButton" type="button" >اكتشف المدينة</a>
        </div>
    </div>

    <div class="section1"  id="section1">
        <h1>معالم المدينة</h1>
        <p>اكتشف جمال التاريخ والروحانية في مدينة المدينة المنورة، حيث تتجلى معالمها الدينية والثقافية بأبهى صورها</p>
    
        <div class="image-container">
            <img src="images/mosques.png" alt="mosques">
            <div class="overlay"></div>
            <div class="content">
                <h2>مساجد</h2>
                <form action="landmarks.php" method="get">
                    <button type="submit">اكتشف مساجد المدينة</button>
                </form>
            </div>
        </div>
        <div class="image-container">
            <img src="images/aa.png" alt="madina">
            <div class="overlay"></div>
            <div class="content">
                <h2>مواقع وآبار</h2>
                <form action="sites and wells.php" method="get">
                    <button type="submit">اكتشف مواقع وآبار المدينة</button>
                </form>
                </div>
        </div>
    </div>
    <div class="section2bg">
        <div class="section2">
            <h1>الأنشطة والترفيه في المدينة</h1>
            <p>استمتع بتجربة ترفيهيه فريدة في مدينة طيبة الطيبة</p>
        </div>

        
        <a href= "museums.php" class="image-container-small-1">
            <img src="images/expo.png" alt="expo">
            <div class="overlay"></div>
            <div class="content">
                <h2>متاحف ومعارض</h2>
            </div>
            <a href="landmarks.php"  class="hidden-link"></a>
        </a>

        <a href= "palm.php" class="image-container-small">
            <img src="images/farms.png" alt="farms">
            <div class="overlay"></div>
            <div class="content">
                <h2>مزارع</h2>
            </div>
        </a>

        <a href="hourses.php" class="image-container-small">
            <img src="images/horse.png" alt="horse">
            <div class="overlay"></div>
            <div class="content">
                <h2>مرابط الخيول</h2>
            </div>
        </a>
        
        <a href="play.php" class="image-container-small">
            <img src="images/toy.png" alt="toy">
            <div class="overlay"></div>
            <div class="content">
                <h2>ملاهي الألعاب</h2>
            </div>
        </a>

        <a href= "mall.php" class="image-container-small-1">
            <img src="images/mall.png" alt="mall">
            <div class="overlay"></div>
            <div class="content">
                <h2>أسواق ومولات</h2>
            </div>
        </a>

        <a href= "park.php" class="image-container-small">
            <img src="images/park.png" alt="park">
            <div class="overlay"></div>
            <div class="content">
                <h2>حدائق ومنتزهات</h2>
            </div>
        </a>

        <a href="path.php" class="image-container-small">
            <img src="images/paths.png" alt="paths">
            <div class="overlay"></div>
            <div class="content">
                <h2> مماشي</h2>
            </div>
        </a>

        <a href="cinema.php" class="image-container-small">
            <img src="images/cinima.png" alt="cenima">
            <div class="overlay"></div>
            <div class="content">
                <h2> سينما</h2>
            </div>
        </a>
        
    </div>

    <div class="section3">
        <div class="section3-content">
            <p>مطاعم وكافيهات المدينة</p>
            <h1>الأعلى تقييماً</h1>
        </div>
        
            <div class="section3-images" >
                <div class="restaurant-box">
                    <img src="images/memas copy.png" alt="Restaurant 1">
                    <div class="overlay-re"></div>
                    <div class="restaurant-info">
                        <h3>مطعم ميماز</h3>
                        <p>التقييم: 4.5</p>
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
                        <p>التقييم: 4.5</p>
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
                        <p>التقييم: 4.5</p>
                        <p>الموقع: بوليفارد العروبة</p>
                        <a href="Beit Ward.php" class="read-more">
                            المزيد <i class="fas fa-chevron-left"></i>
                        </a>
                    </div>
                </div>
                
             </div>
    </div>

    <div class="section4">
        <div class="section4bg">
            <img src="images/shope.png" alt="shop">
            <button class="button" onclick="window.location.href='market.php'">تصفح المتجر</button>
            <div class="content">
                <h1>من المدينة المنورة إلى العالم</h1>
                <p>متجر بوركت للهدايا التذكارية</p>
            </div>
        </div>
    </div>
    <footer>
        <!-- Include the footer content using PHP include -->
        <?php include "footer.php"; ?>
    </footer>
    
</body>
</html>

<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap');

        @font-face {
            `font-family: 'Almadinah3';
            src: url('fonts/Almadinah3.otf') format('opentype'); /* Change 'truetype' to 'opentype' */
            font-weight: normal;
            font-style: normal;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', sans-serif; 
            direction: rtl; /* Right-to-left text direction */
        }

        .navbar {
            width: 100%; /* Change width to 100% for full-width */
            height: 100px;
            background-color:#5C4A56;
            color: #fafafa;
            position: relative; /* Change position to relative */
            padding: 1vw 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000; /* Ensure it's above the banner */
        }

        /* Add styles for the dropdown */
        .navbar ul .dropdown {
            display: none;
            position: absolute;
            background-color: #5c4a56c0;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            border-radius: 1vw;
        }

        .navbar ul .dropdown li {
            padding: 1vw 1vw;
            text-align: center;
            display: block;
        }

        /* Show dropdown when hovering over the parent li */
        .navbar ul .dropdown-li:hover .dropdown,
        .navbar ul .dropdown:hover {
            display:block;
        }

        /* Style the arrow icon */
        .arrow {
            display: inline-block;
            width: 0;
            height: 0;
            border-left: 5px solid transparent; 
            border-right: 5px solid transparent; 
            border-top: 8px solid #ffffff; 
            vertical-align: middle;
            transition: transform 0.3s ease;
        }

        /* Rotate the arrow when dropdown is hovered */
        .dropdown-li:hover .arrow {
            transform: rotateX(180deg);
        }

        .logo {
            width: 10%;
            cursor: pointer;
            margin: 0 11vw; 
        }

        .navbar ul {
            list-style: none;
            margin-right: 5%; 
        }

        .navbar ul li {
            display: inline-block;
            margin: 0 2vw;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #FFFFFF;
            position: relative; /* Ensure proper positioning of the pseudo-element */
        }

        .navbar ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px; /* Adjust the distance from the text */
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease; /* Transition effect */
        }

        .navbar ul li a:hover::after {
            width: 100%; /* Fully cover the link on hover */
        }
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

    </style>
    

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
        <img src="images/logo.svg" class="logo">
    </div>
</body>
</html>
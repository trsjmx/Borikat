<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logoicon.svg" type="image/png" />
<link rel="stylesheet" href="style/login.css">

<title> تسجيل الدخول | بوركت</title>
</head>
<body>
<div class="container">
    <div class="image-container">
        <div class="overlay"></div>
        <img src="images/madina1.png" alt="Image">
        <div class="overlay-text">
            <img src="images/logo.svg" alt="Logo">
            <h1>لَو خيروني بالمدائـــــــنِ كلها </h1>
            <h1>لاخترتُ في دارِ الحبيبِ حياتِي </h1>
        </div>
    </div>
    <div class="content">
        <form class="signup-form" id="loginForm" onsubmit="return validateForm()" method="POST" action="login-con.php">
            <h2> تسجيل الدخول</h2>
            <p>مرحباُ بعودتك، أدخل معلوماتك الشخصية</p>
            <hr>

            <label for="email">*البريد الإلكتروني</label>
            <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" required>
            <span id="emailError" class="error"></span>
            <label for="password">*كلمة المرور </label>
            <input type="password" id="password"  name="password" placeholder="كلمة المرور" required>
            <span id="passwordError" class="error"></span>
            <p class="forgot-password"><a href="#" id="forgot-password-link">نسيت كلمة المرور؟</a></p>
            <button type="submit">تسجيل الدخول</button>
            <p class="new-user-link">هل أنت مستخدم جديد؟ <a href="signup.html">سجل الآن</a></p>

        </form>    
        
    </div>
</div>

<script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var isValid = true;

        // Reset error messages
        document.getElementById("emailError").innerText = "";
        document.getElementById("passwordError").innerText = "";

        // Validation for email
        if (email === "") {
            document.getElementById("emailError").innerText = "*الرجاء إدخال البريد الإلكتروني";
            isValid = false;
        }

        // Validation for password
        if (password === "") {
            document.getElementById("passwordError").innerText = "*الرجاء إدخال كلمة المرور";
            isValid = false;
        }

        return isValid;
    }
</script>
</body>
</html>

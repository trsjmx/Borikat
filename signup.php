<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logoicon.svg" type="image/png" />
<link rel="stylesheet" href="style/signup.css">

<title>إنشاء حساب | بوركت</title>
</head>
<body>
<div class="container">
    <div class="image-container">
        <div class="overlay"></div>
        <img src="images/madina.png" alt="Image">
        <div class="overlay-text">
            <img src="images/logo.svg" alt="Logo">
            <h2>رُزِقتُ من المدائِن حبُ طيبةَ</h2>
            <h1>ومَن في حُبِها يوماً يلامُ</h1>
        </div>
    </div>
    <div class="content">
        <form class="signup-form" id="signupForm" method="POST" action="registration.php">
            <h2>إنشاء حساب</h2>
            <p>أدخل معلوماتك الشخصية</p>
            <hr>

            <label for="name">*الاسم</label>
            <input type="text" id="name" name="name" placeholder="الاسم" required>
            <span id="nameError" class="error"></span>
            <label for="email">*البريد الإلكتروني</label>
            <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" required> 
            <span id="emailError" class="error"></span>
            <label for="password">*كلمة المرور </label>
            <input type="password" id="password" name="password" placeholder="كلمة المرور" required>
            <span id="passwordError" class="error"></span>
            <label for="verifyPassword">*تأكيد كلمة المرور</label>
            <input type="password" id="verifyPassword" name="verifyPassword" placeholder="تأكيد كلمة المرور" required>
            <span id="verifyPasswordError" class="error"></span>
            <button type="submit" onclick="return validateForm()">إنشاء حساب</button>


            <p class="new-user-link">لديك حساب بالفعل؟  <a href="login.php">سجل دخولك</a></p>

        </form>

    </div>
</div>

<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var verifyPassword = document.getElementById("verifyPassword").value;
        var isValid = true;

        // Validation for name
        if (name === "") {
            document.getElementById("nameError").innerText = "*الرجاء إدخال الاسم";
            isValid = false;
        } else {
            document.getElementById("nameError").innerText = "";
        }

        // Validation for email
        if (email === "") {
            document.getElementById("emailError").innerText = "*الرجاء إدخال البريد الإلكتروني";
            isValid = false;
        } else {
            document.getElementById("emailError").innerText = "";
        }

        // Validation for password
        if (password === "") {
            document.getElementById("passwordError").innerText = "*الرجاء إدخال كلمة المرور";
            isValid = false;
        } else if (password.length < 8) {
            document.getElementById("passwordError").innerText = "*يجب أن تتكون كلمة المرور من 8 أحرف على الأقل";
            isValid = false;
        } else if (!password.match(/[a-z]/) || !password.match(/[A-Z]/) || !password.match(/[0-9]/) || !password.match(/[-_!@#$%^&*]/)) {
            document.getElementById("passwordError").innerText = "يجب أن تحتوي كلمة المرور على أحرف كبيرة وصغيرة وأرقام ورموز";
            isValid = false;
        } else {
            document.getElementById("passwordError").innerText = "";
        }


        // Validation for verify password
        if (verifyPassword === "") {
            document.getElementById("verifyPasswordError").innerText = "*الرجاء تأكيد كلمة المرور";
            isValid = false;
        } else if (verifyPassword !== password) {
            document.getElementById("verifyPasswordError").innerText = "*كلمة المرور غير متطابقة";
            isValid = false;
        } else {
            document.getElementById("verifyPasswordError").innerText = "";
        }

        return isValid;
    }
</script>
</body>
</html>

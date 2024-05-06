<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logoicon.svg" type="image/png" />
    <link rel="stylesheet" href="style/contactus.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap');
    </style>
    <title>تواصل معنا | بوركت</title>

</head>
<body>
    
    
    <div class="banner">
        <img src="images/pigen.jpg" alt="header" class="headerImg"> 
        <div class="headerText">
            <h1>   تواصل معنا   </h1>   
            <p>نعمل على تحسين تجربتكم في المدينة المنورة، تواصل معنا لأي استفسارات او مقترحات  </p>
        </div>
    </div>

    <div class= "section1"> 
        <form>
            <label for="Name">الاسم: </label>
            <input type="text" name="Name" >
            <label for="Email">البريد الإلكتروني: </label>
            <input type="email" name="ُEmail" >
           
            <label for="subject">الرسالة:</label>
            <textarea name="subject" cols="25" rows="20" > </textarea>
            <input type="submit" value="إرسال">
        </form> 
        

    </div>

    <footer>
        <!-- Include the footer content using PHP include -->
        <?php include "footer.php"; ?>
    </footer>
    
</body>
</html>

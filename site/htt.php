<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAWJIH ABDERRAHIM</title>
    <link rel="stylesheet" href="css.css">
    <script src="java.js"></script>
</head>
<body>
   <header>
    <div class="logo-container">
        <img src="logo.png" alt="Left Logo" class="logo-left">
        <h1>مرحبا في موقع </br>TAWJIH ABDERRAHIM</h1>
        <img src="logo.png" alt="Right Logo" class="logo-right">
    </div>
    
    <nav>
        <ul>
            <li><a href="#about">عن الموقع</a></li>
            <li><a href="#register">التسجيل في المباريات</a></li>
            <li><a href="#contact">اتصل بنا</a></li>
        </ul>
    </nav>
</header>

<section id="about">
    <h2>عن الموقع</h2>
    <p>هنا تجد كل ما تحتاجه حول التوجيه بعد الباكالوريا...</p>
</section>

<section id="social-media-bar">
    <h3>:تابعنا على</h3>
    <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=100095080203600" target="_blank" class="social-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="فيسبوك" />
        </a>
        <a href="https://www.instagram.com/tawjih_abderrahim?igsh=N3lxeDFwZzYwdzFw" target="_blank" class="social-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="إنستغرام" />
        </a>
        <a href="https://m.youtube.com/@AbderrahimTaibi-gx4nb" target="_blank" class="social-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="يوتيوب" />
        </a>
        <a href="https://wa.me/message/JZ5GCI5FSXZBB1" target="_blank" class="social-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="واتساب" />
        </a>
    </div>
</section>

<section id="register">
    <h2>التسجيل في المباريات</h2>
    <p>للتسجيل في المباريات، اضغط على الزر أدناه.</p>
    <button><a href="html1.html" class="register-btn">التسجيل في المباريات</a></button>
</section>

<section id="contact">
    <h2>اتصل بنا</h2>
    

    <form action="" method="POST">
        <label for="name">الاسم:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">الرسالة:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">إرسال</button>
    </form>
</section>

<footer>
    <p>&copy; 2025 TAWJIH ABDERRAHIM. جميع الحقوق محفوظة.</p>
</footer>

</body>
</html>

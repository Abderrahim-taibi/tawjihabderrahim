<?php
$servername = "localhost";
$username = "root";  // غيرها حسب إعداداتك
$password = "";  // إذا كنت مستعمل XAMPP خليه فارغ
$dbname = "tawjih_db";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استقبال البيانات من الفورم
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// إدخال البيانات في الجدول
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "تم إرسال رسالتك بنجاح!";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>
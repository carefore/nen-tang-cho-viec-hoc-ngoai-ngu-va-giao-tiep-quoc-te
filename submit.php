<?php
// Kết nối đến cơ sở dữ liệu (cần cung cấp thông tin đăng nhập của bạn)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "language_platform";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$language = $_POST['language'];

// Chuẩn bị câu lệnh SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO users (name, email, language) VALUES ('$name', '$email', '$language')";

// Thực thi câu lệnh SQL
if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được lưu thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>

<?php
    // Khai báo thư viện
    require_once '../config.php';
    require_once '../functions.php';

    // Khởi tạo các biến
    $url = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    $data = $_POST;

    // Xử lý yêu cầu
    if ($url === '/' && $method === 'GET') {
        // Hiển thị trang chủ
        require_once '../views/home.php';
    } elseif ($url === '/login' && $method === 'POST') {
        // Xử lý đăng nhập
        $username = $data['username'];
        $password = $data['password'];
        // ...
    } else {
        // Hiển thị thông báo lỗi 404
        echo "<h1>404 Not Found</h1>";
    }
?>
<?php
// Khai báo thư viện
require_once 'config.php';
require_once 'database.php';
// Hàm kiểm tra đăng nhập
function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}
// Hàm lấy thông tin người dùng
function getUserInfo($id)
{
    $conn = connectDB();
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    return $user;
}

// Hàm kiểm tra quyền Admin
function checkRole()
{
    if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'Admin') {
        return true;
    } else {
        return false;
    }
}

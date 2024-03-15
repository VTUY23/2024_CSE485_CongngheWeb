<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: /'); // Redirect to login if not authenticated
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <form action="process_login.php" method="post">
        <h1>Đăng nhập</h1>
        <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
        <input type="password" name="password" id="password" placeholder="Mật khẩu">
        <button type="submit">Đăng nhập</button>
        <a href="/" class="cancel">Quay lại</a>
        <?php
        if (isset($_GET['msg'])) {
            echo '<p>' . $_GET['msg'] . '</p><br>';
        }
        ?>
    </form>
</body>

</html>
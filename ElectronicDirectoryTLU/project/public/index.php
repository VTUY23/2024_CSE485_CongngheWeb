<?php
require_once 'app/config.php';
require_once 'app/routes.php';
require_once 'app/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Bạ TLU</title>
    <link rel="stylesheet" href="/public/assets/style.css">
</head>

<body>
    <header>
        <div>
            <img src="https://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/logo.png" alt="">
        </div>
        <div>
            <p>Số 175 Tây sơn - Quận Đống Đa – Thành phố Hà Nội</p>
            <p>Điện thoại: (024) 3852 2201</p>
            <p>(024) 3563 3351</p>
        </div>
    </header>
    <nav>
        <a href="<?= '/home'; ?>">
            <h1>Danh bạ TLU</h1>
        </a>
        <?php if ($object === 'introduce') : ?>
            <span class="active">Giới Thiệu</span>
        <?php else : ?>
            <a href="<?= '/introduce'; ?>">Giới Thiệu</a>
        <?php endif; ?>
        <?php if ($object === 'news+events') : ?>
            <span class="active">Tin tức & Sự kiện</span>
        <?php else : ?>
            <a href="<?= '/news+events'; ?>">Tin tức & Sự kiện</a>
        <?php endif; ?>
        <?php if (checkRole()) : ?>
            <?php if ($object === 'departments') : ?>
                <span class="active">Quản lý đơn vị</span>
            <?php else : ?>
                <a href="<?= '/departments'; ?>">Quản lý đơn vị</a>
            <?php endif; ?>
            <?php if ($object === 'employees') : ?>
                <span class="active">Quản lý nhân viên</span>
            <?php else : ?>
                <a href="<?= '/employees'; ?>">Quản lý nhân viên</a>
            <?php endif; ?>
            <?php if ($object === 'users') : ?>
                <span class="active">Quản lý người dùng</span>
            <?php else : ?>
                <a href="<?= '/users'; ?>">Quản lý người dùng</a>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($object === 'contact') : ?>
            <span class="active">Liên Hệ</span>
        <?php else : ?>
            <a href="<?= '/contact'; ?>">Liên Hệ</a>
        <?php endif; ?>
        <div>
            <?php if (isLoggedIn()) : ?>
                <span>Tài khoản: <?= $_SESSION['user_id']; ?></span>
                <a href="/public/logout.php" class="cancel">Đăng xuất</a>
            <?php else : ?>
                <a href="/public/login.php" class="btn">Đăng nhập</a>
            <?php endif; ?>
        </div>
    </nav>
    <main>
        <?php require $link; ?>
    </main>
    <footer>

    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        * {
            margin: 0px;
            font-family: Calibri;
        }

        ul,
        nav {
            padding: 5px;
            background-color: darkblue;
        }

        li {
            display: inline-block;
            color: white;
            padding: 0px 10px;
            border-left: 1px solid;
        }
    </style>
</head>

<body>
    <?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
    ];
    echo '<nav><ul>';
    foreach ($navItems as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul></nav>';
    ?>
</body>

</html>
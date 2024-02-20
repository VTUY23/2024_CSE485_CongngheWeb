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
    echo '<nav style="background-color: blue;
                     color: white;
                     padding:15px">';
    foreach ($navItems as $item) {
        echo '<span style="font-family: Arial, sans-serif;">' ."|&nbsp &nbsp". $item ."&nbsp &nbsp". '</span>';
    }
    echo '</nav>';
?>

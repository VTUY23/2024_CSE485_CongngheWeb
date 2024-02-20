<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</div>

</body>
</html>
    
    </head>
    <body>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'title' => 'Lập trình web cơ bản',
        'description' => 'Khóa học giúp bạn nắm vững kiến thức cơ bản về lập trình web, từ HTML, CSS đến JavaScript.',
        'fee' => '5.000.000 VND',
        'start_date' => '10/3/24',
        'duration' => '3 tháng'
    ],
    [
        'title' => 'Lập trình PHP',
        'description' => 'Khóa học tập trung vào lập trình PHP, giúp bạn xây dựng ứng dụng web động mạnh mẽ.',
        'fee' => '7.000.000 VND',
        'start_date' => '15/4/24',
        'duration' => '2.5 tháng'
    ],
    [
        'title' => 'Lập trình Java',
        'description' => 'Khóa học dành cho những người muốn học lập trình Java từ cơ bản đến nâng cao.',
        'fee' => '8.000.000 VND',
        'start_date' => '20/5/24',
        'duration' => '3 tháng'
    ],
    [
        'title' => 'Lập trình Python',
        'description' => 'Khóa học giúp bạn học lập trình Python từ cơ bản đến nâng cao, áp dụng vào phân tích dữ liệu và trí tuệ nhân tạo.',
        'fee' => '6.500.000 VND',
        'start_date' => '25/6/24',
        'duration' => '2.5 tháng'
    ],
    [
        'title' => 'Lập trình Ruby',
        'description' => 'Khóa học tập trung vào lập trình Ruby và Ruby on Rails, giúp bạn xây dựng ứng dụng web hiệu quả.',
        'fee' => '7.500.000 VND',
        'start_date' => '30/7/24',
        'duration' => '3 tháng'
    ],
    [
        'title' => 'Lập trình C#',
        'description' => 'Khóa học dành cho những người muốn học lập trình C# và .NET Framework.',
        'fee' => '8.500.000 VND',
        'start_date' => '5/8/24',
        'duration' => '2.5 tháng'
    ],
    [
        'title' => 'Lập trình Mobile',
        'description' => 'Khóa học giúp bạn học lập trình ứng dụng di động trên nền tảng Android và iOS.',
        'fee' => '9.000.000 VND',
        'start_date' => '10/9/24',
        'duration' => '3 tháng'
    ],
];
// Hiển thị danh sách khóa học
$counter = 0;
echo '<div class="container">';
foreach ($courses as $course) {
    if ($counter % 3 == 0) {
        echo '<div class="row justify-content-between">';
    }
    
    echo '<div class="course col-3">';
    echo '<h2 style="font-weight:bold;">' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học phí: ' . $course['fee'] . '</p>';
    echo '<p>Khai giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';

    if ($counter % 3 == 2) {
        echo '</div>';
    }
    
    $counter++;
}

if ($counter % 3 != 0) {
    echo '</div>';
}
echo '</div>';
?>
</body>
</html>
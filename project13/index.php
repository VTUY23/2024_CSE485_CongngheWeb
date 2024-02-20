<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        // Dữ liệu khóa học lưu động trong mảng
        $courses = [
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm',
                'image' => 'https://afterschool.fpt.edu.vn/wp-content/uploads/2023/05/Aptech-teen-chuong-trinh-dao-tao-lap-trinh-quoc-te-danh-cho-tre-dang-hoc-nhat-hien-nay-1024x573.jpg'
            ],
            [
                'title' => 'Lập trình web cơ bản',
                'description' => 'Khóa học giúp bạn nắm vững kiến thức cơ bản về lập trình web, từ HTML, CSS đến JavaScript.',
                'fee' => '5.000.000 VND',
                'start_date' => '10/3/24',
                'duration' => '3 tháng',
                'image' => 'https://website-dev.hn.ss.bfcplatform.vn/8_Xi_Iyl5m_N0_F_Ui_St_M05_Pby6_Dd_Pi_Lq_SI_4_F_Ofe_Qw_IP_Kny_G0_OI_Hq_9786c2a9a8.jpg'
            ],
            [
                'title' => 'Lập trình PHP',
                'description' => 'Khóa học tập trung vào lập trình PHP, giúp bạn xây dựng ứng dụng web động mạnh mẽ.',
                'fee' => '7.000.000 VND',
                'start_date' => '15/4/24',
                'duration' => '2.5 tháng',
                'image' => 'https://funix.edu.vn/wp-content/uploads/2023/09/PH-la-mot-ngon-ngu-lap-trinh-phia-may-chu-manh-me-va-pho-bien.jpg'
            ],
            [
                'title' => 'Lập trình Java',
                'description' => 'Khóa học dành cho những người muốn học lập trình Java từ cơ bản đến nâng cao.',
                'fee' => '8.000.000 VND',
                'start_date' => '20/5/24',
                'duration' => '3 tháng',
                'image' => 'https://i.ytimg.com/vi/IRZrqX_hlcY/maxresdefault.jpg' 
            ],
            [
                'title' => 'Lập trình Python',
                'description' => 'Khóa học giúp bạn học lập trình Python từ cơ bản đến nâng cao, áp dụng vào phân tích dữ liệu và trí tuệ nhân tạo.',
                'fee' => '6.500.000 VND',
                'start_date' => '25/6/24',
                'duration' => '2.5 tháng',
                'image' => 'https://aptechsaigon.edu.vn/gw-content/images/1669013270-KzyjPrn.jpg'
            ],
            [
                'title' => 'Lập trình Ruby',
                'description' => 'Khóa học tập trung vào lập trình Ruby và Ruby on Rails, giúp bạn xây dựng ứng dụng web hiệu quả.',
                'fee' => '7.500.000 VND',
                'start_date' => '30/7/24',
                'duration' => '3 tháng',
                'image' => 'https://tuhoclaptrinh.edu.vn/upload/post/16/37/55/ruby-on-rails-la-gi-20211122113049-811500.jpg'
            ],
            [
                'title' => 'Lập trình C#',
                'description' => 'Khóa học dành cho những người muốn học lập trình C# và .NET Framework.',
                'fee' => '8.500.000 VND',
                'start_date' => '5/8/24',
                'duration' => '2.5 tháng',
                'image' => 'https://aptech.fpt.edu.vn/wp-content/uploads/2022/06/hoc-lap-trinh-.net_.png'
            ],
            [
                'title' => 'Lập trình Mobile',
                'description' => 'Khóa học giúp bạn học lập trình ứng dụng di động trên nền tảng Android và iOS.',
                'fee' => '9.000.000 VND',
                'start_date' => '10/9/24',
                'duration' => '3 tháng',
                'image' => 'https://hocvienit.vn/wp-content/uploads/2020/09/khoa-hoc-lap-trinh-di-dong-flutter-cho-ios-android.jpg'
            ],
        ];
        // Hiển thị danh sách khóa học
        $counter = 0;
        foreach ($courses as $course) {
            if ($counter % 3 == 0) {
                echo '<div class="row justify-content-between">';
            }
            
            echo '<div class="course col-4">';
            echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '" style="width:100%">';
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
        ?>
    </div>
</body>
</html>
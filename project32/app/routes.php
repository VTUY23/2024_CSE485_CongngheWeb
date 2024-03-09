<?php
$url = $_SERVER['REQUEST_URI'];
// Phân tích URL
$parts = explode('/', $url);
$object = $parts[1]; // Ví dụ: departments, employees, users
$action = $parts[2]; // Ví dụ: index, create, store, edit, update, delete
switch ($object) {
    case 'departments':
        switch ($action) {
            case 'index':
                // Hiển thị danh sách bộ phận
                // ...
                break;
            case 'create':
                // Hiển thị form thêm mới bộ phận
                // ...
                break;
            case 'store':
                // Xử lý thêm mới bộ phận
                // ...
                break;
            case 'edit':
                // Hiển thị form chỉnh sửa bộ phận
                // ...
                break;
            case 'update':
                // Xử lý chỉnh sửa bộ phận
                // ...
                break;
            case 'delete':
                // Xử lý xóa bộ phận
                // ...
                break;
        }
        break;
    case 'employees':
        // Xử lý tương tự cho employees
        // ...
        break;
    case 'users':
        // Xử lý tương tự cho users
        // ...
        break;
    default:
        // Hiển thị trang 404
        // ...
}
?>

<?php
// Phân tích URL
$url = explode('?', $_SERVER['REQUEST_URI']);
$parts = explode('/', $url[0]);
$object = $parts[1]; // Ví dụ: departments, employees, users
$action = 'index'; // Mặc định là index
if (count($parts) > 2) $action = $parts[2]; // Ví dụ: index, create, store, edit, update, delete
// Xử lý theo object và action
if ($object == 'departments' || $object == 'employees' || $object == 'users' || $object == 'introduce' || $object == 'news+events' || $object == 'contact') {
    if ($action == "view" || $action == "new") {
        $action = "items";
    }
    if ($action == "add" || $action == "del") {
        $action = "process";
    }
    $link = DOC_ROOT . '/views/' . $object . '/' . $action . '.php';
} elseif ($object == 'home') {
    $link = DOC_ROOT . '/views/home.php';
} else {
    header('Location: /home');
}

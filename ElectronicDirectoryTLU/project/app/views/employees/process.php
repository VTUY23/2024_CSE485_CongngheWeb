<?php
require_once DOC_ROOT . '/models/Employee.php';
require_once DOC_ROOT . '/routes.php';
$id = isset($_POST['id']) ? $_POST['id'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$address = isset($_POST['address']) ? $_POST['address'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$position = isset($_POST['position']) ? $_POST['position'] : "";
$parent = isset($_POST['parent']) ? $_POST['parent'] : "";
if ($parts[count($parts) - 1] == "del") {
    $c = deleteEmployee($_GET['id']);
    if ($c) {
        echo "<br><p>Xóa thành công.</p><br>";
    } else {
        echo "<br><p>Xóa không thành công.</p><br>";
    }
    echo '<br><a href="/employees" class="btn">Quay lại</a>';
    exit();
}
if ($id == "") {
    $c = addEmployee($name, $address, $email, $phone, $position,'', (int)$parent);
    if ($c) {
        echo "<br><p>Thêm mới thành công.</p><br>";
    } else {
        echo "<br><p>Thêm mới không thành công.</p><br>";
    }
    echo '<br><a href="/employees" class="btn">Quay lại</a>';
    exit();
} else {
    $c = updateEmployee($id, $name, $address, $email, $phone, $position, '', (int)$parent);
    if ($c) {
        echo "<br><p>Cập nhật thành công.</p><br>";
    } else {
        echo "<br><p>Cập nhật không thành công.</p><br>";
    }
}
echo '<br><a href="/employees" class="btn">Quay lại</a>';

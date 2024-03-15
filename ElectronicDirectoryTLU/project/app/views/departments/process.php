<?php
require_once DOC_ROOT . '/models/Department.php';
require_once DOC_ROOT . '/routes.php';
$id = isset($_POST['id']) ? $_POST['id'] : "";
$name = isset($_POST['name']) ? $_POST['name'] : "";
$address = isset($_POST['address']) ? $_POST['address'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$website = isset($_POST['website']) ? $_POST['website'] : "";
$parent = isset($_POST['parent']) ? $_POST['parent'] : "";
if ($parts[count($parts) - 1] == "del") {
    $c = deleteDepartment($_GET['id']);
    if ($c) {
        echo "<br><p>Xóa thành công.</p><br>";
    } else {
        echo "<br><p>Xóa không thành công.</p><br>";
    }
    echo '<br><a href="/departments" class="btn">Quay lại</a>';
    exit();
}
if ($id == "") {
    $c = addDepartment($name, $address, $email, $phone, '', $website, (int)$parent);
    if ($c) {
        echo "<br><p>Thêm mới thành công.</p><br>";
    } else {
        echo "<br><p>Thêm mới không thành công.</p><br>";
    }
    echo '<br><a href="/departments" class="btn">Quay lại</a>';
    exit();
} else {
    $c = updateDepartment($id, $name, $address, $email, $phone, '', $website, (int)$parent);
    if ($c) {
        echo "<br><p>Cập nhật thành công.</p><br>";
    } else {
        echo "<br><p>Cập nhật không thành công.</p><br>";
    }
}
echo '<br><a href="/departments" class="btn">Quay lại</a>';

<?php
require_once DOC_ROOT . '/models/Employee.php';
if (!checkRole() && $parts[count($parts) - 1] != 'view') {
    exit('<br>You are not authenticated.');
}
if ($parts[count($parts) - 1] == "new") {
    echo '<br><h1>Thêm mới</h1>';
}
if ($parts[count($parts) - 1] == "view") {
    echo '<br><h1>Thông tin</h1>';
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $data = getEmployeeById($id);
    }
}
$data['EmployeeID'] =  isset($data['EmployeeID']) ? $data['EmployeeID'] : "";
$data['FullName'] =  isset($data['FullName']) ? $data['FullName'] : "";
$data['Address'] =  isset($data['Address']) ? $data['Address'] : "";
$data['Email'] =  isset($data['Email']) ? $data['Email'] : "";
$data['MobilePhone'] =  isset($data['MobilePhone']) ? $data['MobilePhone'] : "";
$data['Position'] =  isset($data['Position']) ? $data['Position'] : "";
$data['DepartmentID'] =  isset($data['DepartmentID']) ? $data['DepartmentID'] : "";
?>
<div class="department">
    <img src="" alt="">
    <form action="/employees/add" method="post">
        <input type="hidden" name="id" value="<?= $data['EmployeeID'] ?>">
        <label for="">Tên nhân viên:</label>
        <input type="text" name="name" value="<?= $data['FullName'] ?>">
        <label for="">Địa chỉ:</label>
        <input type="text" name="address" value="<?= $data['Address'] ?>">
        <label for="">Email:</label>
        <input type="text" name="email" value="<?= $data['Email'] ?>">
        <label for="">Số điện thoại:</label>
        <input type="text" name="phone" value="<?= $data['MobilePhone'] ?>">
        <label for="">Chức vụ:</label>
        <input type="text" name="position" value="<?= $data['Position'] ?>">
        <label for="">Đơn vị:</label>
        <input type="text" name="parent" value="<?= $data['DepartmentID'] ?>">
        <div></div>
        <br>
        <?php if ($parts[count($parts) - 1] != "view") : ?>
            <label for="">Avatar:</label>
            <input type="file" name="file">
        <?php endif; ?>
        <br>
        <div>
            <?php if ($parts[count($parts) - 1] == "new") : ?>
                <button>Xác nhận</button>
                <a href="/employees" class="cancel">Hủy bỏ</a>
            <?php elseif ($parts[count($parts) - 1] == "view") : ?>
                <a href="/home?<?= $_SESSION['search']; ?>" class="cancel">Quay lại</a>
            <?php else : ?>
                <button>Cập nhật</button>
                <a href="/employees/del?id=<?= $data['EmployeeID'] ?>" class="cancel">Xóa bỏ</a>
            <?php endif; ?>
        </div>
    </form>
</div>
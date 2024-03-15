<?php
require_once DOC_ROOT . '/models/Department.php';
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
        $data = getDepartmentById($id);
    }
}
$data['DepartmentID'] =  isset($data['DepartmentID']) ? $data['DepartmentID'] : "";
$data['DepartmentName'] =  isset($data['DepartmentName']) ? $data['DepartmentName'] : "";
$data['Address'] =  isset($data['Address']) ? $data['Address'] : "";
$data['Email'] =  isset($data['Email']) ? $data['Email'] : "";
$data['Phone'] =  isset($data['Phone']) ? $data['Phone'] : "";
$data['Website'] =  isset($data['Website']) ? $data['Website'] : "";
$data['ParentDepartmentID'] =  isset($data['ParentDepartmentID']) ? $data['ParentDepartmentID'] : "";
?>
<div class="department">
    <img src="" alt="">
    <form action="/departments/add" method="post">
        <input type="hidden" name="id" value="<?= $data['DepartmentID'] ?>">
        <label for="">Tên đơn vị:</label>
        <input type="text" name="name" value="<?= $data['DepartmentName'] ?>">
        <label for="">Địa chỉ:</label>
        <input type="text" name="address" value="<?= $data['Address'] ?>">
        <label for="">Email:</label>
        <input type="text" name="email" value="<?= $data['Email'] ?>">
        <label for="">Số điện thoại:</label>
        <input type="text" name="phone" value="<?= $data['Phone'] ?>">
        <label for="">Link website:</label>
        <input type="text" name="website" value="<?= $data['Website'] ?>">
        <label for="">Khoa:</label>
        <input type="text" name="parent" value="<?= $data['ParentDepartmentID'] ?>">
        <div></div>
        <br>
        <?php if ($parts[count($parts) - 1] != "view") : ?>
            <label for="">Logo:</label>
            <input type="file" name="file">
        <?php endif; ?>
        <br>
        <div>
            <?php if ($parts[count($parts) - 1] == "new") : ?>
                <button>Xác nhận</button>
                <a href="/departments" class="cancel">Hủy bỏ</a>
            <?php elseif ($parts[count($parts) - 1] == "view") : ?>
                <a href="/home?<?= $_SESSION['search']; ?>" class="cancel">Quay lại</a>
            <?php else : ?>
                <button>Cập nhật</button>
                <a href="/departments/del?id=<?= $data['DepartmentID'] ?>" class="cancel">Xóa bỏ</a>
            <?php endif; ?>
        </div>
    </form>
</div>
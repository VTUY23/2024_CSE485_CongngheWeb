<?php
require_once DOC_ROOT . '/models/Department.php';
require_once DOC_ROOT . '/models/Employee.php';
$attribute =  isset($_GET['attributes']) ? $_GET['attributes'] : 'none';
$words = isset($_GET['words']) && $attribute != 'none' ? $_GET['words'] : '';
if (isset($_GET['tablesDB'])) {
    $tablesDB = $_GET['tablesDB'];
    if ($attribute == 'address')
        $attribute = 'Address';
    if ($attribute == 'email')
        $attribute = 'Email';
    if ($attribute == 'name')
        $attribute = 'FullName';
    if ($attribute == 'position')
        $attribute = 'Position';
    if ($tablesDB == 'departments') {
        if ($words != '' && $attribute != 'none') {
            if ($attribute == 'FullName' || $attribute == 'Position')
                $attribute = 'DepartmentName';
            $data = searchDepartments($words, $attribute);
        } else {
            $data = getDepartments();
        }
    } else if ($tablesDB == 'employees') {
        if ($words != '' && $attribute != 'none') {
            $data = searchEmployees($words, $attribute);
        } else {
            $data = getEmployees();
        }
    } else {
        if ($words != '' && $attribute != 'none') {
            $dataEmployees = searchEmployees($words, $attribute);
            $dataDepartments = [];
            if ($attribute != 'Position') {
                if ($attribute == 'FullName')
                    $attribute = 'DepartmentName';
                $dataDepartments = searchDepartments($words, $attribute);
            }
            $data = array_merge($dataEmployees, $dataDepartments);
        } else {
            $data = array_merge(getEmployees(), getDepartments());
        }
    }
    if ($attribute == 'DepartmentName' || $attribute == 'FullName')
        $attribute = 'name';
    $_SESSION['search'] = 'tablesDB=' . $tablesDB . '&attributes=' . $attribute . '&words=' . $words;
} else {
    $data = array_merge(getEmployees(), getDepartments());
    $_SESSION['search'] = 'tablesDB=all&attributes=none&words=';
}
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = 5;
$totalPages = ceil(count($data) / $itemsPerPage);
$currentPageItems = array_slice($data, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
$Previous = '<< Trước đó';
$Next = 'Tiếp theo >>';
?>
<form action="">
    <select name="tablesDB" id="">
        <?php if ($tablesDB == 'all') : ?>
            <option value="all" selected>-- Mục Dạnh Bạ --</option>
        <?php else : ?>
            <option value="all">-- Mục Dạnh Bạ --</option>
        <?php endif; ?>
        <?php if ($tablesDB == 'departments') : ?>
            <option value="departments" selected>Đơn vị</option>
        <?php else : ?>
            <option value="departments">Đơn vị</option>
        <?php endif; ?>
        <?php if ($tablesDB == 'employees' || $attribute == 'Position') : ?>
            <option value="employees" selected>Nhân viên</option>
        <?php else : ?>
            <option value="employees">Nhân viên</option>
        <?php endif; ?>
    </select>
    <select name="attributes" id="">
        <?php if ($attribute == 'none') : ?>
            <option value="none" selected>-- Chọn Thuộc tính --</option>
        <?php else : ?>
            <option value="none">-- Chọn Thuộc tính --</option>
        <?php endif; ?>
        <?php if ($attribute == 'name') : ?>
            <option value="name" selected>Tên</option>
        <?php else : ?>
            <option value="name">Tên</option>
        <?php endif; ?>
        <?php if ($attribute == 'Address') : ?>
            <option value="address" selected>Địa chỉ</option>
        <?php else : ?>
            <option value="address">Địa chỉ</option>
        <?php endif; ?>
        <?php if ($attribute == 'Email') : ?>
            <option value="email" selected>Email</option>
        <?php else : ?>
            <option value="email">Email</option>
        <?php endif; ?>
        <?php if ($attribute == 'Position' && $tablesDB != 'departments') : ?>
            <option value="position" selected>Chức vụ</option>
        <?php else : ?>
            <option value="position">Chức vụ</option>
        <?php endif; ?>
    </select>
    <input type="text" name="words" id="" value="<?= $words ?>">
    <button type="submit">Tìm kiếm</button>
</form>
<div class="pagination">
    <?php if ($currentPage > 1) : ?>
        <a href="?<?php echo $_SESSION['search'] . '&page=' . $currentPage - 1; ?>"><?= $Previous; ?></a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
        <?php if ($i == $currentPage) : ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else : ?>
            <a href="?<?php echo $_SESSION['search'] . '&page=' . $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages) : ?>
        <a href="?<?php echo $_SESSION['search'] . '&page=' . $currentPage + 1; ?>"><?= $Next; ?></a>
    <?php endif; ?>
</div>
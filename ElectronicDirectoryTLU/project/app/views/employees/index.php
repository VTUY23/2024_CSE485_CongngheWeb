<?php
if (!checkRole()) {
    exit('<br>You are not authenticated.');
}
$_GET['tablesDB'] = 'employees';
require_once DOC_ROOT . '/views/search.php';
?>
<div class="">
    <a href="employees/new" class="btn">Thêm mới</a>
    <?php foreach ($currentPageItems as $data) : ?>
        <?php require DOC_ROOT . '/views/employees/items.php'; ?>
    <?php endforeach; ?>
</div>
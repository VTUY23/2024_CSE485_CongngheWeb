<?php
if (!checkRole()) {
    exit('<br>You are not authenticated.');
}
$_GET['tablesDB'] = 'departments';
require_once DOC_ROOT . '/views/search.php';
?>
<div class="">
    <a href="departments/new" class="btn">Thêm mới</a>
    <?php foreach ($currentPageItems as $data) : ?>
        <?php require DOC_ROOT . '/views/departments/items.php'; ?>
    <?php endforeach; ?>
</div>
<?php
require_once 'search.php';
?>
<div class="show">
    <?php foreach ($currentPageItems as $data) : ?>
        <?php if (isset($data['DepartmentName'])) : ?>
            <form action='/departments/view' method="post">
                <div class="items">
                    <img src="" alt="">
                    <h3><?= $data['DepartmentName'] ?></h3>
                    <p>
                        Khoa: <?= $data['ParentDepartmentID'] ?>
                    </p>
                    <input type="hidden" name="id" value="<?= $data['DepartmentID']; ?>">
                    <input type="submit" name="" value="Xem chi tiết" class="btn">
                </div>
            </form>
        <?php else : ?>
            <form action='/employees/view' method="post">
                <div class="items">
                    <img src="" alt="">
                    <h3><?= $data['FullName'] ?></h3>
                    <p>Chức vụ: <?= $data['Position'] ?></p>
                    <input type="hidden" name="id" value="<?= $data['EmployeeID']; ?>">
                    <input type="submit" name="" value="Xem chi tiết" class="btn">
                </div>
            </form>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
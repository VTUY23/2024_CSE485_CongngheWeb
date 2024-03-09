<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân trang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include "product.php"; 
        $itemsPerPage = 4;
        $totalPages = ceil(count($products) / $itemsPerPage);
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    ?>
    <div class="product-list container-fluid">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product">
                <?php
                    echo $product['name'] . "<br>";
                    echo "$ ".$product['price'] . "<br>";
                    echo $product['description'] . "<br>";
                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container paging">
    <nav aria-label="...">
        <ul class="pagination">
            <?php if ($currentPage > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>" tabindex="-1">&laquo;</a>
                </li>
            <?php else: ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">&laquo;</a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <?php if ($i == $currentPage): ?>
                    <li class="page-item active">
                        <a class="page-link" href="#"><?php echo $i; ?> <span class="sr-only">(current)</span></a>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">&raquo;</a>
                </li>
            <?php else: ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#">&raquo;</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
    </div>
</body>
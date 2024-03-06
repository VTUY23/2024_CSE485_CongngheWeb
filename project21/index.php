<?php
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Calibri;
        }

        .product-list {
            display: grid;
            grid-template-columns: auto auto auto auto;
            text-align: center;
            gap: 20px;
            margin-bottom: 50px;
        }

        img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        a,
        span {
            padding: 5px;
            text-decoration: none;
            color: black;
        }

        .active {
            color: red;
            border-bottom: 1px solid red;
        }
    </style>
</head>

<body>
    <?php
    require_once "products.php";
    $itemsPerPage = 4;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    ?>
    <div class="product-list">
        <?php foreach ($currentPageItems as $product) : ?>
            <div class="product" onclick="">
                <img src="<?= $product['img'] ?>" alt="">
                <h3><?= $product['name'] ?></h3>
                <?php
                if ($product['price'] > 0)
                    echo "<p>\${$product['price']}</p>";
                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>
</body>

</html>
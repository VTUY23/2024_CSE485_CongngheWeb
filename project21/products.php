<?php
$pro = 26;
for ($i = 1; $i < $pro; $i++) {
    $products[$i] = [
        "id" => $i,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "img" => "img/Tshirt.jpg"
    ];
    $products[++$i] = [
        "id" => $i,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "img" => "img/Jean.jpg"
    ];
}

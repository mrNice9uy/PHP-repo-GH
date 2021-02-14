<?php
include_once  __DIR__ . "/../config/main.php";
include  ENGINE_DIR . "users.php";
include  ENGINE_DIR . "view.php";
include  ENGINE_DIR . "products.php";
session_start();
$basket = [];
if(!empty($_SESSION['basket'])) {
    $products = array_filter(
        array_keys($_SESSION['basket']),
        function ($element) {
            return is_int($element);
        }
    );

    $products = getProducts($products);
    foreach ($products as $product) {
        $basket[] = [
            'product' => $product,
            'qty' => $_SESSION['basket'][$product['id']]
        ];
    }
}

render('basket', compact('basket'));

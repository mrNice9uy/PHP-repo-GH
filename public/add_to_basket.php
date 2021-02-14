<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "base.php";

session_start();

if($_SERVER['REQUEST_METHOD']  ='POST') {
    $productId = $_POST['product_id'];
    $productQty = $_POST['qty'];

    if(isset($_SESSION['basket'][$productId])) {
        $_SESSION['basket'][$productId] += $productQty;
    } else {
        $_SESSION['basket'][$productId] = $productQty;
    }
}

redirectToReferer();    // редирект на страницу, откуда пришел запрос
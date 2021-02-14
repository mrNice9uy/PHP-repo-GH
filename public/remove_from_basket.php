<?php
include_once __DIR__ . "/../config/main.php";
include ENGINE_DIR . "base.php";
session_start();

if(isset($_GET['id'])) {
    $productId =$_GET['id'];
    if(isset($_SESSION['basket'][$productId])) {
        unset($_SESSION['basket'][$productId]);
    }
}
redirectToReferer();
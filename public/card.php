<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "products.php";
include_once ENGINE_DIR . "feedbacks.php";
include_once ENGINE_DIR . "menu.php";

$id = (int) $_GET['id'];

$product = getProductById($id);
$feedbacks = getFeedBacksByProductId($id);
$menu = getMenu();
include VIEWS_DIR . "card.php";
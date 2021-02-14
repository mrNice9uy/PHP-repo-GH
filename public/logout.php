<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . 'base.php';
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "menu.php";

session_start();
unset($_SESSION['login']);
unset($_SESSION['id']);
session_unset();
session_destroy();
redirect("/");
//header("Location: ../index.html");
?>
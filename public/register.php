<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "view.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "auth.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password == $confirm_password) {
        $userId = createUser($login, getHash($password));
        authByUserId($userId);
        redirect("/profile");
    }
}


render('register');
?>
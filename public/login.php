<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "view.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "auth.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $password = getHash($_POST['password']);

        if($user =  getUserByLoginPassword($login, $password)) {
            //setcookie('user_id', $user['id']);
            $_SESSION['user_id'] = $user['id'];
            redirect("/profile");
        } else {
            echo "Логин/пароль неверный!";
        }
    }

render('login');
?>

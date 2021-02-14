<?php
include_once __DIR__ . "/../../config/main.php";
include_once ENGINE_DIR . "view.php";
include_once ENGINE_DIR . "users.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "auth.php";
session_start();

if(!$user = getCurrentUser()) {
    redirect('/login.php');
}

render('profile', ['user' => $user]);

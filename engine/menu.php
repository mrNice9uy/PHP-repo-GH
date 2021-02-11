<?php
include_once ENGINE_DIR . "db.php";

function getMenu()
{
   /* $host = '127.0.0.1';
    $login = 'root';
    $password = 'root';
    $dbName = 'main_db';

    $connection = mysqli_connect($host, $login, $password, $dbName);
    $sql = "SELECT * FROM menu";
    $res = mysqli_query($connection, $sql); // данные, полученные из запроса
    //$menu
    return mysqli_fetch_all($res, MYSQLI_ASSOC); // заменяет код ниже
    /*while ($row = mysqli_fetch_assoc($res)) {
        $menu[] = $row;
    }*/
    return queryAll( "SELECT * FROM menu ORDER BY `order`");
    //return queryAll( "SELECT * FROM menu WHERE access = 1");

}
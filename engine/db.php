<?php
include_once __DIR__. "/../config/main.php";
function getConnection() {
    // подключаем файл и записываем его содержимое в переменную (Только в том случае, если в файле есть return!)
    // используя static сохраняем данные $connection между вызовами функций. Т.е. они не сбрасываются при последующих вызовах
    // использовать static обычно не желательно
    static $connection = null;
    if (is_null($connection)) {
        $config = include  CONFIG_DIR . "db.php";
        $connection = mysqli_connect(
            $config['host'],
            $config['login'],
            $config['password'],
            $config['dbName']
        );
    }
    return $connection;
}

// функция для запросов, которые делают выборку
function queryAll($sql) {
    //var_dump($sql);
    $res = mysqli_query(getConnection(), $sql);
    //var_dump($res);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne($sql) {
    return queryAll($sql)[0];
}

// функция для запросов, которые не делают выборку (типа "UPDATE")
function execute($sql) {
    return mysqli_query(getConnection(), $sql);
}

function getLastInsertId() {
    return mysqli_insert_id(getConnection());
}


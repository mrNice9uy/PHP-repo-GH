<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'main_db';

$connection = mysqli_connect($host, $login, $password, $dbName);

$sql = "INSERT INTO products (title, description, price)
        VALUES ('Крестный отец', 'Предложение, от которого невозможно отказаться', 544),
        ('Сияние', 'Роман, написанный в жанрах психологического ужаса и готической литературы.', 441),
        ('451° по Фаренгейту', 'Роман, принесший писателю мировую известность.', 320)
";

$res = mysqli_query(
    $connection, $sql
);
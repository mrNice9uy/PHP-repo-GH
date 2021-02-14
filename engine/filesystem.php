<?php
function readCsv(string $source)
{
    $f = fopen($source, 'r');
    $data = [];
    while ($row = fgetcsv($f, 0, ';')) {
        $data[] = $row;
    }

    fclose($f);
    return $data;
}

function getFiles($directory) {
    return array_filter(
// читаем список всех элементов директории (массив)
        scandir($directory),
        /* используем анонимную функцию для фильтрации результата работы функции scandir()
        $item - имя элемента; use - замыкание
        */
        function ($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}

function uploadFile($name, $destination) {
    if(isset($_FILES[$name])) {
        $tmpPath = $_FILES[$name]['tmp_name'];
        $destination .= "/{$_FILES[$name]['name']}";
        move_uploaded_file($tmpPath,$destination); // копирует файл на сервер, удаляет из временного хранилища
        //copy(); - функция копирования файлов
    }
}
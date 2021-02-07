<?php

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

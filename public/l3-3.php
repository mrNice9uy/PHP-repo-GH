<?php
function dispCT($arr) {
    foreach ($arr as $key => $value) {
        echo $key . '<br>';
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++) {
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i].'<br>';
            } else {
                echo $arr[$key][$i] . ', ';
            }
        }
    }
}

$cities = [
    'Московская область.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область.' => ['Рязань', 'Касимов', 'Сасово', 'Скопин', 'Шацк']
];

dispCT($cities);

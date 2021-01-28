<?php
function searchCT($arg, $arr) {
    $wrongCT = 0;
    $countCT = count($arr, COUNT_RECURSIVE) - count($arr);
    foreach ($arr as $key => $value) {
        for ($i = 0; $i < count($arr[$key]); $i++) {
            $newArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            if ($newArr[0] == $arg) {
                echo implode($newArr) . '<br>';
            } else {
                $wrongCT++;
                if ($wrongCT == $countCT) {
                    return print "Городов на букву '{$arg}' в массиве нет.";
                }
            }
        }
    }
}

$cities = [
    'Московская область.' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область.' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область.' => ['Рязань', 'Касимов', 'Сасово', 'Скопин', 'Шацк']
];
$searchArg = 'К';
searchCT($searchArg, $cities);

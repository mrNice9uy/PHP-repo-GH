<?php
function transliterate($str) {
    $dictionary = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sсh",
        "ъ" => "",
        "ы" => "i",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
    ];
    $str = mb_strtolower($str);
    $arr = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
    $newStr = '';
    foreach($arr as $val) {
        $newStr .= (isset($dictionary[$val])) ? $dictionary[$val] : $val;
    }
    return $newStr;
}

function spaceReplace($str) {
    $arr = str_split($str, 1);
    for ($i = 0; $i < count($arr); $i++ ) {
        if ($arr[$i] == ' ') {
            $arr[$i] = '_';
        }
    }
    return implode($arr);
}

function translitReplace($str) {
    $str = transliterate($str);
    $str = spaceReplace($str);
    return $str;
}
$str = 'тестовая строка';
echo translitReplace('Это тестовая строка');

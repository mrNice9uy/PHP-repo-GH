<?php

function plus($a, $b) {
    return $a + $b;
}
function minus($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b == 0) {
        return null;
    } else
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) {
    $result = 0;
    switch ($operation) {
        case "+":
            $result = plus($arg1, $arg2);
            break;
        case "-":
            $result = minus($arg1, $arg2);
            break;
        case "*":
            $result = multiply($arg1, $arg2);
            break;
        case "/":
            $result = divide($arg1, $arg2);
            break;
    }
    return $result;
}

// если нажали на кнопку, получаем переменные
if ($_POST['submit']) {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $operation = $_POST['operation'];
    $result = mathOperation($a, $b, $operation);
}
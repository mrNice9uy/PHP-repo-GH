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

$arg1 = 4;
$arg2 = 8;
$operation = "+";
//$operation = "-";
//$operation = "*";
//$operation = "/";
$result = mathOperation($arg1, $arg2, $operation);
echo "Результат: ", $arg1,$operation,$arg2, " = ", $result;

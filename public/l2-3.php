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

$a = 4;
$b = 8;
echo "Nums: a = ", $a,', b = ', $b, '<br/>';
$result1 = plus($a, $b);
echo "Sum = ", $result1, '<br/>';
$result2 = minus($a, $b);
echo "Minus = ", $result2, '<br/>';
$result3 = multiply($a, $b);
echo "Mult = ", $result3, '<br/>';
$result4 = divide($a, $b);
echo "Div = ", $result4, '<br/>';

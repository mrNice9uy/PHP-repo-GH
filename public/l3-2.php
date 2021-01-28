<?php
function disp($num) {
    echo $num.' - ноль'.'<br>';
    $num++;
    do {
        if ($num % 2 == 0) {
            echo $num.' - четное число'.'<br>';
            $num++;
        } else {
            echo $num.' - нечетное число'.'<br>';
            $num++;
        }
    } while ($num < 11);
}
$num = 0;
disp($num);

<?php
function disp($num) {
    while ($num < 100) {
        if ($num % 3 == 0) {
            echo $num++ . ' ';
        }
        $num++;
    }
}
$num = 0;
disp($num);

<?php
function spaceReplace($str) {
    $arr = str_split($str, 1);
    for ($i = 0; $i < count($arr); $i++ ) {
        if ($arr[$i] == ' ') {
            $arr[$i] = '_';
        }
    }
    return implode($arr);
}

/*  Был еще такой вариант решения
 * function replace($str) {
	echo str_replace(" ", "_", $str);
};

replace("qwerty dkfnmb qqq ttt");
 */

$str = 'qwerty dkfnmb qqq ttt';
echo 'Original: ',$str.'<br>','Modified:',spaceReplace($str);

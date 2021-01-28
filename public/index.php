<?php
$lesson = 'Lesson-3-6';
$greeting = 'Hello world!';
//$year = 2021;
$year = date('Y');
$menu = [
        'FirstLvlItem1',
        'FirstLvlItem2' => ['ScndLvlItem1', 'ScndLvlItem2', 'ScndLvlItem3'],
        'FirstLvlItem3' => ['ScndLvlItem4' => ['ThirdLvlItem1', 'ThirdLvlItem2']]
];

function menuShow($menu) {
    $renderList[] = '<ul>';
    foreach ($menu as $key => $value) {
        if (is_array($value)) {
            $renderList[] = '<li>' . $key . menuShow($value) . '</li>';
        } else {
            $renderList[] = '<li>' . $value . '</li>';
        }
    }
    $renderList[] = '</ul>';
    return implode($renderList);
};
echo  menuShow($menu);
?>

<h1><?=$lesson?></h1>
<p><?=$greeting?></p>
<footer><?=$year?></footer>

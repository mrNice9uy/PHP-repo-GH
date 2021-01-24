<?php
function currentTime() {
    $hours = date('H');
    $minutes = date('i');
    $lastHoursNum = substr($hours, -1);
    $lastMinutesNum = substr($minutes, -1);

    if ($lastHoursNum == 1) {
        $hours .= ' час';
    } elseif ($lastHoursNum == 2 || $lastHoursNum == 3 || $lastHoursNum == 4) {
        $hours .= ' часа';
    } else {
        $hours .= ' часов';
    }

    if ($lastMinutesNum == 1) {
        $minutes .= ' минута';
    } elseif ($lastMinutesNum == 2 || $lastMinutesNum == 3 || $lastMinutesNum == 4) {
        $minutes .= ' минуты';
    } else {
        $minutes .= ' минут';
    }

    return $hours.' '.$minutes;
}

echo  currentTime();

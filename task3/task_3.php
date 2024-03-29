<?php
$a = rand(1, 9);
$d = 10 * rand(1, 3);
$q = $a * $d;
$w = $q += rand(0, 100);
switch (true /*$q*/) {
    case $w >= 0 && $q < 100:
        echo "1";
        break;
    case $w >= 100 && $q < 200:
        echo "2";
        break;
    case $w >= 200 && $q < 300:
        echo "3";
        break;
    case $w > 300:
        echo "Нет ничего хуже, чем упустить шанс, который мог бы изменить твою жизнь. Следуй своей дорогой, и пусть люди говорят всё что угодно.";
        break;
    default:
        echo "не получилось";
        break;
}
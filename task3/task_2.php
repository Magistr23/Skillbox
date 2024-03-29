<?php
$a = rand(1, 9);
$d = 10 * rand(1, 3);
$q = $a * $d;
switch (true /*$q*/) {
    case $q >= 0 && $q < 100:
        echo "1";
        break;
    case $q >= 100 && $q < 200:
        echo "2";
        break;
    case $q >= 200 && $q < 300:
        echo "3";
        break;
    default:
        echo "не получилось";
        break;
}